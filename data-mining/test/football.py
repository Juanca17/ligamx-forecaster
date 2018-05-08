########### Python 3.2 #############
import http.client, urllib.request, urllib.parse, urllib.error, base64

headers = {
    # Request headers
    'Ocp-Apim-Subscription-Key': 'fe0c50545d76487d857f6d64eff30624',
}

params = urllib.parse.urlencode({
})

try:
    conn = http.client.HTTPSConnection('api.fantasydata.net')
    conn.request("GET", "/v3/soccer/scores/JSON/MembershipsByTeam/884?%s" % params, "{body}", headers)
    response = conn.getresponse()
    data = response.read()
    print(data)
    conn.close()
except Exception as e:
    print("[Errno {0}] {1}".format(e.errno, e.strerror))

####################################
