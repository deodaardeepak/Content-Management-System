# Content-Management-System

A content management system (CMS) is a application that supports the creation and modification of content using a common user interface and thus usually supporting multiple users working in a collaborative environment.

Note:This is just a basic CMS for beginners developed by me and my friend panchu when we started learning php. Not the Best one!

Create a Database "Mydatabase"

Add a table home_content which will contain all the contents uploaded through the cms by admin.

<!--    Query for home_content  -->

CREATE TABLE IF NOT EXISTS `home_content` (
`id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` mediumtext NOT NULL,
  `publicationDate` date NOT NULL,
  `type` varchar(255) NOT NULL,
  `img_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;



<------------------------------------>


Create a table home_images which will contain all the contents uploaded through the cms by admin.

<-------------------------------------------------------------------->



CREATE TABLE IF NOT EXISTS `home_images` (
`img_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

<-------------------------------------------------------------------->




