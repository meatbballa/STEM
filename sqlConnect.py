import MySQLdb

db = MySQLdb.connect(host="192.168.0.132", user="user", passwd="password",
db="school")
	#create cursor
cur = db.cursor(MySQLdb.cursors.DictCursor)
#create table requirement
sql = "SELECT * from students"

cur.execute (sql)

rows = cur.fetchall()
for row in rows:
	print(row['name' + " " + str(row['age']) + " " + str(row['gradelevel'])

#disconnect
cur.close()
db.close()
