from requests import post 
print "Coding By J4CKOP"
i:input('masukan nomor:')
dat = {'msisdn':i}
re =post ("https://passport.jd.id/findPwd",dat)
Print ("STATUS:",re.json()["message"])
