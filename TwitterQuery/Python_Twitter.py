import csv
import tweepy

Consumer_key        = ""
Consumer_Secret     = ""
Access_Token        = ""
Access_Token_Secret = ""

def printTweets(hashtag):
    print("Hole Tweets für #{}".format(hashtag))
    auth = tweepy.OAuthHandler(Consumer_key, Consumer_Secret)
    auth.set_access_token(Access_Token, Access_Token_Secret)

    api = tweepy.API(auth)
    tweets = api.search(hashtag, count = 5)
    for x in tweets:
        print(x.text)

with open ('Tab1.csv') as f:
    keywords = csv.reader(f, quotechar = '"')
    for keywordLine in keywords:
        for keyword in keywordLine:
            printTweets(keyword)