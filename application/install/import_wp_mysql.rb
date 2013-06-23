#
# Import Wordpress articles (post/page) from database and save as magog articles.
#
# RubyGems
# sudo apt-get install libmysql-ruby
require 'rubygems'
require 'mysql'
require 'time'

class Database_connection
  hostname = "localhost"
  database_name = " "
  username = "root"
  password = " "
  table_name = ""
  db = nil

  def hostname
    @hostname
  end

  def database_name
    @database_name
  end

  def username
    @username
  end


  def hostname=(x)
    @hostname = x
  end

  def database_name=(x)
    @database_name = x
  end

  def username=(x)
    @username = x
  end

  def password=(x)
    @password = x
  end

  def table_name
    @table_name
  end

  def table_name=(x)
    @table_name = x
  end

  def db
    @db
  end

  def connect
    begin
      @db = Mysql.new(@hostname, @username, @password, @database_name)
    rescue Mysql::Error => error
      print "MySQL Error: " + error.error

    end
  end


end

class Import_WP
  db_src = Database_connection.new
  db_trg = Database_connection.new

  def ask_once
    x = Database_connection.new
    print "Hostname: "
    x.hostname= gets.chomp!
    print "Database name: "
    x.database_name= gets.chomp!
    print "Table name: "
    x.table_name = gets.chomp!
    print "Username: "
    x.username = gets.chomp!
    print "Password: "
    x.password = gets.chomp!
    x
  end

  def ask
    print "--------------------------------------------------\n"
    print "[MySQL] Import Wordpress articles to Magog's database.\n"
    print "--------------------------------------------------\n\n"
    print "Source database configuration\n"
    @db_src = ask_once
    print "\nDestination database configuration\n"
    @db_trg = ask_once
  end

  def copy
    @db_src.connect
    @db_trg.connect

    result = @db_src.db.query("SELECT id, post_title, post_name, post_content, post_date, post_modified FROM "+@db_src.table_name)

    while row = result.fetch_row do
      row[1] = Mysql.escape_string(row[1]);
      row[2] = Mysql.escape_string(row[2]);
      row[3] = Mysql.escape_string(row[3]);
      row[4] = Time.parse(row[4]).to_i.to_s
      row[5] = Time.parse(row[5]).to_i.to_s
      @db_trg.db.query("INSERT INTO "+@db_trg.table_name+" VALUES (NULL,'"+row[1]+"','"+row[2]+"','"+row[3]+"',1,"+row[4]+","+row[5]+",0,0,0,'','en',NULL)")
    end

  end

  def info
    print "\n\nImport successful!\n"
  end


  def run
    self.ask
    self.copy
    self.info
  end


end

begin
  importwp = Import_WP.new
  importwp.run
#db = Mysql.new()
end