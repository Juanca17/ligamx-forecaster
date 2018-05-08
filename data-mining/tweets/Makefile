all:


test-twitter-pull:
	python3 getTweets.py Faitelson_ESPN >> test-pull.json
	cat test-pull.json

test-analistas:
	./testbash.sh

test-cleandata:
	python3 test-cleandata.py

pull-data:
	./pull-analistas-data.sh
