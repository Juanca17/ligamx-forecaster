# LigaMX Forecaster
Final project for TC3041 - Advanced Databases, where I try to forecast the winner of Liga MX championship by using a soccer feed and analyzing sport experts tweets.

## Author
Juan Carlos Sanchez Cruz - A01631462

## Motivation
This project seeks to solve a simple question, **who will be the winning the liga mx season 2018?** In Mexico football is almost treated with political language and it is no coincidence that there are so many sports analysis programs. This sport is a round-the-media business. The live broadcasts of the matches are very expensive due to the number of people summoned. After every football game, the conversation turns to interpret the events and plays. But one of the things that draws my attention is the speculation that is created before, and that the Mexican League is very difficult to predict. Bets never fully favor one side, and there are many factors that can affect a team's performance.

What I'm looking for in this project is to make a prediction that uses historical data about the teams in the playoff and complement it with the positive or negative opinions on tweets of a selected group of sports analysts.

## System Architecture
The data flows in the system as follows:  
![data-flowchart](img/data-flow.png)

The numbers correspond to the chronological order in which the processes are developed. In the case of the two sources of data mining, this could be done in parallel.

## Data Mining
There are two main sources for the data needed.

### Soccer Feed
After looking for many sports feed that could give me the information needed in a JSON, I found [Fantasy Data](https://developer.fantasydata.com/) which is RESTful web API that provides updated historical data for free.

It took me 3 steps to gather the information.
1. To search the roundId so I can query the right information from the API.
2. Pull a JSON from the API that has relevant information of the teams from the league.
3. Insert information to the database including the follow attributes:  
    - Table position
    - Games played, wins, lost, and draws.
    - Goals in favor and against.
    - Last games streak.

### Sport Experts Tweets
To mine the data on Twitter, I used the Python library [Tweepy](http://www.tweepy.org/) which allows you to pull up to 200 tweets per user.  
The information extracted was:
- The tweet id
- The creation date
- Username
- The full tweet text

As each tweet was pulled before it gets a JSON format, the full_text attribute is cleaned, by removing unnecessary jump spaces and by replacing `" "` with `''` to avoid some format conflicts.

## Tangible Data
The combination of two types of data sources makes inference and prediction more robust. Our tangible data are nothing more than variables that serve to measure the success or failure of the football teams to examine.

### Validity
This data does belong to the same scheme of the search, since it is information that directly affects the objects that we examine.

### Accuracy
One of the main data that the betting houses use to calculate the probability of victory or defeat of a sporting event are the historical statistics of the teams involved. This method is used in the algorithm of this program, with the singularity that the opinions of expert analysts are also taken into account.

### Completeness
The necessary data will never be sufficient since there are other factors that, as small as they may be, can completely alter the outcome of a football match. However, the approach that is being given to the information used is, to some extent, good in order to achieve a justified inference.

### Consistency
As I tried to make the data the more consistent with the real data, I can not guarantee a high level of this, especially in the information obtained through Twitter, since the sentiment analysis was not very robust and may not reflect 100% the real opinion of the user.

### Uniformity
The uniformity of the data exists, since the same algorithm is applied under the same measures to the teams that integrate the play offs.

## Database Used
MongoDB is a free and open source and **document oriented** database. I used it because it uses JSON files to save the information and this format is what the system receives when doing the data mining. It also has the advantages of being a non-relational database, such as being able to access the values of some attributes faster when there are large amounts of data.

## Criteria Used
To determine the odds of the teams to win the championship a number of variables were used. The next algorithm was used:

[(19 - `position at league`) + `games won` + `goal difference` + (`games won in the last 5 played` * 10)] * [(`percentage of positive tweets` * 0.1) + 1]

## Data Visualization
To display the prediction result, I create a simple interface using elements from the [Bootstrap Material Design Library](https://mdbootstrap.com/material-design-for-bootstrap/). The first thing the user can see, is the question that this project is made about and then a colorful graph of the teams. The percentages used in this graph are obtained from the scores that the algorithm assigned to each computer and are stored as a separate attribute.  
![index section](img/index.png)

There is also a section of tweets where the most relevant of the official hashtag of the competition are shown.  
![index section](img/tweets-section.png)

You can see the outcome of [ligamx-forecaster](http://bit.ly/ligamx-forecaster) hosted with github pages. This version does not have a backend connection, and the data used is from the sample extracted on May 2nd, 2018.

## Constraints
This project only works for the **Liga MX - Torneo Clausura 2018**. It only works for sports analysts that tweets in Spanish. And works with a custom version environment.

## Future Improvements
This project definitely has several opportunities for improvement. More historical data could be mined to improve prediction and the feed could be connected to automatically update at real time. It could certainly improve the sentiment analysis to better interpret the opinions of analysts.

## DIKW Pyramid
In this project:
- Data: They are the numbers that together create the statistics of the teams. Also the text that each tweet represents.

- Information: It is what the data really mean and its reflection in reality. For example, if a team goes bad, this is likely to be reflected in the statistics.

- Knowledge: It is the inference we make from these data, that is, the values with which we weigh the probability of success or failure of each team.

- Wisdom: Are the adjustments we make to the variables to judge with better accuracy. The opinions that a sports analyst may have are due to the experience in their field.

## Conclusions
With no doubt, in this project I had to use all the skills and tools seen within the course. From the approach of a system that can be solved with the information in social networks, the extraction of the data along with its filtering and later use, and the use of a database that is scalable when saving large amounts of data.

## Run this Project
### Prerequisites
You have to get your own keys first.  
For the Fantasy Data API you need to register [here](https://fantasydata.com/cart/checkout.aspx) to obtained a free key. Then you need to create a file `feedKey.py` in the `data-mining/api/` folder and add the variable `api_key = '{api_key}'`.
For the twitter API you need to register your widget [here](https://developer.twitter.com/) to get your credentials. Then you need to create a file `connection.py` in the `data-mining/tweets/` folder and add the variables:  
```
ckey = "{consumer_key}"
csecret = "{consumer_secret}"
atoken = "{access_token}"
asecret = "{access_token_secret}"
```

### Installing
After pulling the data, you need to put the `app` folder into a `php5 apache2` server to run the interface. You need also to install the mongodb extension for php5. For macOS 10.12, the necessary driver is php56-mongodb which I install it using `brew install php56-mongodb` or `sudo pecl install mongodb`.

### Running the tests
The data-pull can be tested using the appropriate argument in `make`.

## Built With
- MongoDB
- PHP5
- Python 3.6
- Tweepy
- Bootstrap Material Design

## Acknowledgments
- To all sports analysts whose twitter accounts were used for this project.
- Rodolfo Rubén Alvarez, teacher of TC3041 course at ITESM.
