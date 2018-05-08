########### Python 3.2 #############
import http.client, urllib.request, urllib.parse, urllib.error, base64
import feedKey

headers = {
    # Request headers
    'Ocp-Apim-Subscription-Key': feedKey.api_key,
}

params = urllib.parse.urlencode({
})

try:
    conn = http.client.HTTPSConnection('api.fantasydata.net')
    conn.request("GET", "/v3/soccer/scores/JSON/Competitions?%s" % params, "{body}", headers)
    response = conn.getresponse()
    data = response.read()
    print(data)
    conn.close()
except Exception as e:
    print("[Errno {0}] {1}".format(e.errno, e.strerror))

####################################
