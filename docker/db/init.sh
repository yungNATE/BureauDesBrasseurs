echo "########### Running SQL script against DB ###########"
mysql --user="$MYSQL_USER" --password="$MYSQL_PASSWORD" --database="$MYSQL_DATABASE" < /tmp/sql/01-init-sql-script.sql

echo "########### Script execution finished! ###########"