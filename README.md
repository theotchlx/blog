# blog
A simple PHP blog.  Just to try things out.

--

### Setup
docker-compose up -d  
psql -h localhost -U blogger -d blog -f create_tables.sql

### Security issues and other problems with this project:
When trying to access a file, it sends a 401 Forbidden instead of a 404 Not Found.  
No "prerequired/installation" section in readme (apache, php, cloning...)  
Apache conf doesn't use ServerName  
Does redirect to a 404 when trying to access post_message.php and get_messages.php directly.  
README doesn't detail how to setup with Apache

--
