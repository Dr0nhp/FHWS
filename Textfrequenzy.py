import urllib.request
from collections import Counter
from bs4 import BeautifulSoup

#s ="Some random String. This is very awesome kjfklwef is not a word"
url  = "https://www.fhws.de"
html = urllib.request.urlopen(url).read()
soup = BeautifulSoup(html, "html5lib")

soup = (soup.get_text())
s = str(soup)
s.rstrip('\n')
countable = s.split()
counts = Counter(countable)
print(counts.split(', '))