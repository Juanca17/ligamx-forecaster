import tweepy
import sys
import re
import connection

def remove_emoji(string):
    emoji_pattern = re.compile("["
                           u"\U0001F600-\U0001F64F"  # emoticons
                           u"\U0001F300-\U0001F5FF"  # symbols & pictographs
                           u"\U0001F680-\U0001F6FF"  # transport & map symbols
                           u"\U0001F1E0-\U0001F1FF"  # flags (iOS)
                           u"\U00002702-\U000027B0"
                           u"\U000024C2-\U0001F251"
                           "]+", flags=re.UNICODE)
    return emoji_pattern.sub(r'', string)

auth = tweepy.OAuthHandler(connection.ckey, connection.csecret)
auth.set_access_token(connection.atoken, connection.asecret)
api = tweepy.API(auth)

analista = str(sys.argv[1])

stuff = api.user_timeline(screen_name = analista ,count=1, tweet_mode='extended', include_rts = True)
for status in stuff:
	tweet_id = status.id
	created_at = status.created_at
	username = status.user.name
	full_text = str(status.full_text)
	full_text = full_text.replace("\"", "'")
	full_text = remove_emoji(full_text)
	str_format = "{\"tweet_id\":"+str(tweet_id)+", \"created_at\":\""+str(created_at)+"\", \"username\":\""+username+"\", \"text\":\""+full_text+"\"},"
	print (str_format)
