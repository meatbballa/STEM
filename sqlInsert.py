import MySQLdb

db = MySQLdb.connect(host="192.168.0.132", user="user", passwd="password",
db="school")
	#create cursor
cur = db.cursor(MySQLdb.cursors.DictCursor)



name = 'stephen'
age = 17
gradeLevel = 11


#create table requirement
sql = "INSERT INTO students (name,age,gradeLevel) VALUES ('langly',3,41)"

cur.execute (sql)

sql2= " SELECT lllll"

#disconnect
cur.close()
db.close()
