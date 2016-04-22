def send_email(user, pwd, recipient, subject, body):
    import smtplib

    gmail_user = user
    gmail_pwd = pwd
    FROM = user
    TO = recipient if type(recipient) is list else [recipient]
    SUBJECT = subject
    TEXT = body
    message = """\From: %s\nTo: %s\nSubject: %s\n\n%s
    """ % (FROM, ", ".join(TO), SUBJECT, TEXT)
    try:
        server = smtplib.SMTP("smtp.gmail.com", 587)
        server.ehlo()
        server.starttls()
        server.login(gmail_user, gmail_pwd)
        server.sendmail(FROM, TO, message)
        server.close()
        print 'successfully sent the mail'
    except:
        print "failed to send mail"
def get_data():
	import MySQLdb
	db = MySQLdb.connect(host="localhost",user="root",passwd="",db="website")        
	cur = db.cursor()
	cur.execute("SELECT Email FROM users WHERE id=(SELECT MAX(id) FROM users)")
	res=cur.fetchall()
	x= res[0][0]
	db.close()
	return x
x=get_data()
m='Welcome to the family Now you will have the honour of booking the rooms and accessing various packages in this wonderful resort.We wish to give you the pleasure of experiencing heaven on earth.'
send_email('angelsresortindia@gmail.com','resort25',x,'Welcome To Family',m)