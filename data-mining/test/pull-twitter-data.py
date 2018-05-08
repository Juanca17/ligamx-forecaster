import tweepy
import sys
from connection import *

auth = tweepy.OAuthHandler(ckey, csecret)
auth.set_access_token(atoken, asecret)
api = tweepy.API(auth)

analista = str(sys.argv[1])

stuff = api.user_timeline(screen_name = analista ,count=200, tweet_mode='extended', include_rts = True)
for status in stuff:
	tweet_id = status.id
	created_at = status.created_at
	username = status.user.name
	full_text = status.full_text
	str_format = "{\"tweet_id\":"+str(tweet_id)+", \"created_at\":"+str(created_at)+", \"username\":"+username+", \"text\": "+full_text+"}"
	print (str_format)
