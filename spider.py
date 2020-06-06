from bs4 import BeautifulSoup as bs
import requests
fp = open("test.txt","a")
r = requests.get("http://210.70.80.21/~s108021004/")
r.encoding = "utf-8"
html_doc = r.text
print(r.status_code)
strdata = str(r.text)
out_flie = open('downloadPage.html','w', encoding="utf-8")
out_flie.write(r.text)
out_flie.write(strdata)
print('done')
out_flie.close()
soup = bs(html_doc, 'html.parser')
print("---------------------------------------------------")
sp = soup.prettify()
# print(sp)
# fp.write(sp)
print(soup.title)
print("---------------------------------------------------")
td_tags = soup.find_all('ul')
a_tags = soup.find_all('a')
# print(type(td_a_tags))
for tag in td_tags:
    # fp.write(str(tag.string) + "-->" + str(tag.get('href')) + "\n")
    print(tag.string, " --> ")
fp.close