from __future__ import absolute_import, print_function

from tweepy.streaming import StreamListener
from tweepy import OAuthHandler
from tweepy import Stream

# Go to http://apps.twitter.com and create an app.
# The consumer key and secret will be generated for you after
consumer_key="ddWhZAwZUHWOTSwFkoVbO9NZY"
consumer_secret="Cx2GM0wrbZfW5WQy9vQtkGGa1UbVVCTpYN8wKVK9FFc9CsBL1G"

# After the step above, you will be redirected to your app's page.
# Create an access token under the the "Your access token" section
access_token="140966636-Q0EhE59aZ6wPzTe7CC4BgODcNVmw4NByh24dzf2r"
access_token_secret="D0cxOIGagRA4ITDrVcWg3M7xh2WaKspN08vI0iEF8bljx"

class StdOutListener(StreamListener):
    """ A listener handles tweets that are received from the stream.
    This is a basic listener that just prints received tweets to stdout.

    """
    def on_data(self, data):
        print(data)
        return True

    def on_error(self, status):
        print(status)

if __name__ == '__main__':
    l = StdOutListener()
    auth = OAuthHandler(consumer_key, consumer_secret)
    auth.set_access_token(access_token, access_token_secret)

    stream = Stream(auth, l)
    stream.filter(track=['Faitelson_ESPN', "toluca", "diablos rojos", "nemesio diez", "lider del torneo", "diablosrojos", "siemprerojos", "vengadiablos", "toluca fc", "diablos", "superlider"])
