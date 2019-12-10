-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2017 at 06:27 AM
-- Server version: 5.6.16
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `servenow`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `blog_title` varchar(200) NOT NULL,
  `blog_desc` varchar(2000) NOT NULL,
  `blog_image` varchar(300) NOT NULL,
  `author` varchar(30) NOT NULL,
  `day` varchar(20) NOT NULL,
  `month` varchar(20) NOT NULL,
  `year` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `blog_title`, `blog_desc`, `blog_image`, `author`, `day`, `month`, `year`) VALUES
(1, '20 Girls Graduated From Tailoring School', '<p>Girls and women graduated from the tailoring school. Due to the poverty and unavailability of employment services, Nepal is marked as a highly risked country for girls and women. Thousands of them are already sold in local sex trade markets and in the abroad. The chain of the human trafficking agents is being stronger day by day. Many times, some political and other support keeps the law under the agents. Many organizations including the GHF are working hard to eliminate this social problem which is totally against the humanity. Girls and&nbsp;women choose the option to work in the cities or in the abroad instead of living poor life in their own village. They want to leave their village just because they want to work, earn and support their family. Knowing this situation, the GHF has been conducting skill development trainings in many locations over the last few years. 20 girls and women are recently graduated from the 6 months tailoring school in Chitwan Nepal. Gentle Heart Foundation, a nonprofit social based organization conducted this training to strengthen girls and women financially. Gentle Heart Foundation hopes that the graduates will be able to earn and support their family as they have got an income generating skill now. Mr. Ramhari Nyaupane, Social development officer of District Development Committee Chitwan was the chief guest of the graduation program. He thanks the GHF for working in the needed community. He praised the GHF for its transparent works. All the graduates are excited gaining this skill and are planning to start their own tailoring shop or sewing and cutting job.</p>\r\n', 'blog_1464860145.jpg', '', '02', 'Jun', '2016'),
(2, 'GHF Provided Scholarship for 20 Children in Co-ordinatioon with DDC, Kathmandu', '<p>District Development Committee Office, Kathmandu has organized Scholarship Distribution Program on May 29, 2016 and provided scholarship. Gentle Heart Foundation provided scholarship for 20 vulnerable children who are from community/public schools &amp; colleges. Honorable State-Minister, Kunti Kumari Shahi inaugurated the program, the meeting was chaired by Local Development Officer and Chief District Officer of Kathmandu was the Special Guest as well as other dignitaries were present. 189 children got the scholarship during the function. We wish all the very best for these and many other children for their better future.</p>\r\n', 'blog_1464861148.jpg', '', '02', 'Jun', '2016');

-- --------------------------------------------------------

--
-- Table structure for table `children`
--

CREATE TABLE `children` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `children`
--

INSERT INTO `children` (`id`, `fullname`, `dob`, `image`) VALUES
(7, 'Shoana Dhakal', '2007-06-01', 'children_1466688435.jpg'),
(8, 'Mandira Gotame', '2006-11-04', 'children_1466688488.jpg'),
(9, 'Mukul Kunwar', '2007-10-30', 'children_1466688554.jpg'),
(10, 'Bijay Tamang', '2006-11-28', 'children_1466688660.jpg'),
(11, 'Norbu Tamang', '2006-12-01', 'children_1466688824.jpg'),
(12, 'Biraj Bhatta', '2006-08-17', 'children_1466688892.jpg'),
(13, 'Sristi Thapa Magar', '2006-10-09', 'children_1466689015.jpg'),
(14, 'Puspa Praja', '2005-11-04', 'children_1466689105.jpg'),
(15, 'Rejina Giri', '2004-06-19', 'children_1466689323.jpg'),
(16, 'Abhishek Rai', '2005-11-03', 'children_1466689415.jpg'),
(17, 'Sunita Gurung', '2001-07-16', 'children_1466689771.jpg'),
(18, 'Eunice Dhakal', '2004-06-19', 'children_1466689901.jpg'),
(19, 'Sujan Sapkota', '1994-05-17', 'children_1466690029.jpg'),
(20, 'Elisha Dangi', '2002-09-18', 'children_1466690103.jpg'),
(21, 'Umesh Karki', '1999-02-17', 'children_1466690192.jpg'),
(22, 'Sristi Tamang', '2000-09-13', 'children_1466690262.jpg'),
(23, 'Ruben Khadka', '2001-09-23', 'children_1466690360.jpg'),
(24, 'Markus Tamang', '2009-07-08', 'children_1466763483.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `forget_password`
--

CREATE TABLE `forget_password` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `temp_key` varchar(200) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forget_password`
--

INSERT INTO `forget_password` (`id`, `email`, `temp_key`, `created`) VALUES
(0, 'suresh.wrc@gmail.com', '12c5062d90f16c7bb690a49e9397c03', '2017-02-23 10:23:32');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `title` varchar(40) NOT NULL,
  `slogan` varchar(50) NOT NULL,
  `logo` varchar(300) NOT NULL,
  `main_quote` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `title`, `slogan`, `logo`, `main_quote`) VALUES
(1, 'ServeNow', 'This is my slogan', 'this is my logo', '\"To help the Orphaned, underprivileged and destitute children of Nepal as well as high risk girls & sexually exploited women in their need and help them to feel the fullness of life.\"<br>\n\n \n\nWe aim to care the rejected, be a family for the orphan, help the helpless, provide home for the homeless, giving hope to the hopeless, and meet the basic needs of needy children & exploited women for their better living.\n');

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `id` int(11) NOT NULL,
  `program_title` varchar(100) NOT NULL,
  `program_desc` text NOT NULL,
  `image` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`id`, `program_title`, `program_desc`, `image`) VALUES
(1, 'Gentle Heart Children\'s Home', '<p>Gentle Heart Foundation always aims on providing special care for the orphaned, underprivileged and vulnerable children of Nepal. GHF started a Home in 2002 to provide the family environment for the children and is presently located in a rented 10-room house in Kathmandu, Nepal. The 18 sons and daughters and the youngest is 6 years old and are all enrolled in English-medium schools. We also have 10 others who have moved on to independence and are now in further education or employment.</p>\n\n<p>&nbsp;</p>\n\n<p>We give the utmost attention to developing these children holistically to help them grow into well-rounded and independent adults. Hence, we keep close tabs on their schoolwork and have prep-times daily. The children are encouraged to participate actively in extra-curricular activities, and have responsibilities around the house proportionate to their maturity. We also have time set aside every morning and evening for personal and corporate prayer and bible study.</p>\n\n<p>We are getting many request to help the children who are in desperate need, living without family and looking for someone&#39;s care and love, by knowing the utmost need of such children, we strongly feel the need of another Home where we can help in better way by keeping smaller in numbers. So, we are praying for the needed resources for setting up and running the two different Homes !</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p><em><strong>GHF is looking for Partnership for this program to run smoothly.</strong></em></p>\n\n<p>&nbsp;</p>\n', 'http://3.bp.blogspot.com/-5n4t6uYVaII/VqXpkZjwesI/AAAAAAAAAZI/gMESiC-vjBs/s1600/PA036853.JPG'),
(2, 'Recovery Programs', '<p>Tens of thousands if not more, young Nepali women are being sexually exploited across Nepal in cabin restaurants, dance bars, brothels and on the streets. In India and abroad hundreds of thousands of young Nepali women (if not more) are being sexually exploited and held against their will.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>It is very difficult to help these women while they are being held captive however someday all of them will be kicked out, forced to leave or will escape their captors. At this time it is critical that these women are immediately given a place to begin the long healing process. It is critical that they are given every kind of support service necessary to recover and start a new life.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Gentle Heart Foundation aims to provide a way out for young women that are able to escape the sex trade and offer them a viable solution for their recovery and sustainability.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>GHF has adopted the SA Foundation Program Model for &quot;Recovery Base Programs&quot; . The SA Foundation is Christian based program widely recognized as one of the few programs worldwide meeting the specific needs of sexually exploited/trafficked women with or without children. The SA Foundation Program Model has been replicated in Canada, the U.S, Asia and Europe.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em><strong>The SAF is providing funding for this program.</strong></em></p>\r\n\r\n<p>&nbsp;</p>\r\n', ''),
(3, 'Scholarships', '<p>We give grants for children to attend local schools. Fees are paid directly to the schools, and other needs such as uniform and stationery are provided in kind. This way, we avoid the potential problem of parents misusing funds.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>We presently support 150&nbsp;children who are in desperate need of education help in different parts of Nepal, and visit them at the end of every term to keep tabs on their progress. We are happy to inform you that they all are doing well. It is such a joy to see the happy faces :) While we met to their teachers, they were very impressed with the mission of GHF. Thank you for your prayers.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em><strong>GHF is looking for Partnership for this program to run smoothly.</strong></em></p>\r\n\r\n<p>&nbsp;</p>\r\n', 'http://3.bp.blogspot.com/-nKFkbsgZ4UQ/U2XyeWPAvqI/AAAAAAAAAT4/2BH6OuS_Gk8/s1600/P4163464.JPG'),
(4, 'Vocational training and micro loans', '<p>These would help improve employ ability  and potentially open up opportunities for small business. Our plan is to begin with having some of the older children in the Children\'s Home learn vocational skills, and then teach them to these women. Not only would this help the women concerned, but the \"teachers\" would also gain skills and have an opportunity to serve. Training could include skills such as knitting, tailoring, making handicrafts etc.</p><p>\nThese are for cases where the trained women wish to start a small business as a result of their new skill-such as by making and selling handicrafts. We can help them with the initial cost by giving small loans at very low interest rates.</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p><em><strong>GHF is looking for Partnership for this program to run smoothly.</strong></em></p>\n\n<p>&nbsp;</p>\n', 'https://3.bp.blogspot.com/-Im3Q529DIxU/V0F8EzdZS4I/AAAAAAAAAa4/gZg4SPgGIagfdCDVnZ0nhMb9lvoF9UeoACLcB/s1600/IMG_0866.JPG'),
(5, 'Trafficking Awareness Campaigns', 'This is especially needed in remote areas, where similar efforts by other social workers are minimal or non-existent. Our campaign structure will include working with local governments at the village and regional levels to spread information about the deceptive practices of traffickers. In addition, we are exploring the possibility of working with networks of churches. The idea is to have an audience with ministers at conferences, and equip them to spread the word in their respective villages. Finally, we are hoping to conduct events and help set up social clubs at the village level which will continually help raise awareness of the issue among parents and youngsters.\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p><em><strong>GHF is looking for Partnership for this program to run smoothly.</strong></em></p>\n\n<p>&nbsp;</p>\n', 'https://3.bp.blogspot.com/-wWLY_jVZAg8/V0F94ov5kKI/AAAAAAAAAbE/UeLJJnWFxrws_Vr9qmFENoSEtCaw16xmQCLcB/s1600/Awarness%2BCampaign.jpg'),
(6, 'Gender Empowerment and Income generators', 'This project is addressed to abandoned or widowed women who cannot support themselves adequately.\n\nDonating income generators such as a pair of cattle can help increase a woman\'s income consistently and over the long term. Goats, for instance, could be bred for sale.\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p><em><strong>GHF is looking for Partnership for this program to run smoothly.</strong></em></p>\n\n<p>&nbsp;</p>\n', ''),
(7, 'Reintegration', 'The idea behind this project is to help children who want to escape the socioeconomic, psychological and spiritual clutches of the sex trade in order to lead normal lives. This may be difficult due to social attitudes concerning their backgrounds, or simply because they lack the skills to enter employment. We hope to provide biblical counselling for the affected people and their families, as well as vocational training to help them get work.', ''),
(8, 'After School Program', '<p><em><strong>GHF started this program by knowing the following reality:</strong></em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>After-school programs keep children, especially girls safe and protect them from negative and unsafe behaviors.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Improves personality and maturity&nbsp;</p>\r\n	</li>\r\n</ul>\r\n\r\n<blockquote>\r\n<p>After school programs have an impressive influence on preventing these girls from experimenting with drugs and other deviant behavior. This is simply because students are enjoying a productive activity and are being supervised during their attendance in the after school program.</p>\r\n</blockquote>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Programs and tutoring keep children away from trouble</p>\r\n	</li>\r\n</ul>\r\n\r\n<blockquote>\r\n<p>High-risk teen girls conduct transpires most often after school. This is a time when these girls are out of school and parents or guardians are still working. Unwatched and on their own, girls can get involved in a number of activities that may not be appropriate, or even participate in activities that can actually be very dangerous. That&#39;s when bad things can happen ... in an instant ... unexpected.</p>\r\n</blockquote>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Provides supervision for parents who cannot regularly be with their offspring</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>GHF want to create real &#39;community school&#39; that serve the entire community through these girls</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Giving the opportunity for creative activity i.e. writings, poem, speech, drawing, singing etc.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Provide activities that support socialization with peers</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>GHF aims to support and complement classroom learning by emphasizing social, emotional and physical development for these girls</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Help working parents who are poor of the poorest</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Having said these, after school program is running for:</strong></p>\r\n\r\n<blockquote>\r\n<ul>\r\n	<li>\r\n	<p>Prevent from crime, drugs &amp; exploitation/trafficking</p>\r\n	</li>\r\n	<li>\r\n	<p>Social-emotional development i.e. self-esteem, initiative, leadership skills etc.</p>\r\n	</li>\r\n	<li>\r\n	<p>Better education performance for girls to provide equal opportunity&nbsp;</p>\r\n	</li>\r\n</ul>\r\n</blockquote>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em><strong>GFC is providing part of the amount for this program and still looking for additional needed funding to carry on this project.</strong></em></p>\r\n\r\n<p>&nbsp;</p>\r\n', 'https://3.bp.blogspot.com/-BndqxAEIH40/V0F2dNnlBlI/AAAAAAAAAac/ptqhQOzAKCQkjTfFaJIVbcqt2WuMO41cwCLcB/s1600/Scholarship_After%2BSchool%2BProgram%2B3.jpg'),
(30, 'The Big Picture', '<p><strong>The Birth of Gentle Heart Foundation</strong></p>\n\n<p>The Gentle Heart Foundation was born out of a sense of God&rsquo;s heart for orphaned children of Nepal and the personal experience of the founder. The founder says that the service should originate from the heart and be implemented by the hands, this is how the name Gentle Heart Foundation came to be! He took in his first child in 2002 and after marriage in 2003 they had three boys living in their new apartment. Support for the needs of the children comes to the Foundation by their own work and gifts of friends. Today they have rented an 8 room home that provides space for 18 children. 6 others have gone on to work or further schooling. In 2009 the work expanded to children whose families are trapped by poverty, disability and/or exploitation. In 2015 it expanded further to include exploited and high risk women of Nepal.</p>\n\n<p>&nbsp;</p>\n\n<p><strong>Our Mission</strong></p>\n\n<p>&ldquo;To help orphaned, underprivileged and destitute children of Nepal as well as high risk girls &amp; sexually exploited women in their need and help them to feel the fullness of life.&rdquo;</p>\n\n<p>Through its workers and volunteers the Gentle Heart Foundation aims to care for the rejected, be a family for the orphaned, help the helpless, provide a home for the homeless, give hope to the hopeless, and meet the basic needs of needy children &amp; exploited girls/women and offer them a better life.</p>\n\n<p>&nbsp;</p>\n\n<p><strong>What We Do</strong></p>\n\n<p>Gentle Heart Foundation is a nonprofit, non-governmental organization in Nepal; launched in 2002 to help orphaned and vulnerable children and high risk &amp; sexually exploited girls/women by providing them with a loving family environment within a home and working for their holistic development.</p>\n\n<p>&nbsp;</p>\n\n<p><strong>Our Service and Values</strong></p>\n\n<ul>\n	<li>\n	<p>Provide a family environment for orphaned and vulnerable children within a home.</p>\n	</li>\n	<li>\n	<p>Provide for the educational needs of the children through scholarships &amp; an After School Program.</p>\n	</li>\n	<li>\n	<p>Nurture the physical, mental, and psycho-social health and personality aspects of endangered children.</p>\n	</li>\n	<li>\n	<p>Provide primary health care and basic as well as technical education for the children &amp; women.</p>\n	</li>\n	<li>\n	<p>Run and support various community-based programs that address and facilitate the fundamental rights of the children &amp; women.</p>\n	</li>\n	<li>\n	<p>Involve and invite the participation of local people in activities and education regarding child development and women&rsquo;s rights.</p>\n	</li>\n	<li>\n	<p>Run a Recovery Home for high risk and exploited girls/women that provides a safe environment for them to work on their personal recovery.</p>\n	</li>\n	<li>\n	<p>Provide Recovery Day Program that incorporates life skills training and teaching for high risk and exploited girls/women that will enable them to be reintegrated into society.</p>\n	</li>\n	<li>\n	<p>Encourage individuals to stretch out their hands to help needy children around them.</p>\n	</li>\n	<li>\n	<p>Create awareness of the horrors of human trafficking and how to work to combat it.</p>\n	</li>\n	<li>\n	<p>Provide vocational training for high risk girls and/or poor women through prevention programs</p>\n	</li>\n</ul>\n\n<p>&nbsp;</p>\n\n<p><strong>Our Programs</strong></p>\n\n<p>&nbsp;</p>\n\n<p><strong>1. Children&rsquo;s Programs (Children receive the benefits of all of these programs)</strong></p>\n\n<p><strong>a. For Abandoned Children</strong><br />\nThese children have no one around to care for them. Their parents may have died, been victims of civil violence or are simply untraceable.</p>\n\n<p><strong>Our response: Gentle Heart Children&rsquo;s Home </strong></p>\n\n<p>&nbsp;</p>\n\n<p><strong>b. For Exploited Children:</strong><br />\nThese children fall into 4 categories, although overlap between categories is common.</p>\n\n<p><strong>i)&nbsp;&nbsp;Child Labor</strong></p>\n\n<p>Many children work to help supply their family income, or simply because schooling is unaffordable. These children may work in such places as restaurants, factories, or family-run fields. According to UNICEF, 34% of Nepalese children fall into this&nbsp;category.</p>\n\n<p><strong>Our response: Scholarships &amp; After School Program </strong></p>\n\n<p>&nbsp;</p>\n\n<p><strong>ii)&nbsp;Child Slavery </strong></p>\n\n<p>These children do domestic work, or labor for businesses such as carpet factories, brick kilns and restaurants. Many of them are sold or forced into slavery due to extreme poverty, while many others are abandoned children &ldquo;taken in&rdquo; by the businesses.</p>\n\n<p><strong>Our response: Gentle Heart Children&rsquo;s Home</strong></p>\n\n<p>&nbsp;</p>\n\n<p><strong>iii)&nbsp;Local Sex Trade </strong></p>\n\n<p>For the many children forced into the local sex industry, returning to a normal life can be very difficult due to social attitudes, or simply because they lack the skills to enter legitimate employment.</p>\n\n<p><strong>Our response: Gentle Heart Children&rsquo;s Home or Reintegration</strong></p>\n\n<p>&nbsp;</p>\n\n<p><strong>iv)&nbsp;Human Trafficking </strong></p>\n\n<p>Nepal has one of the world&rsquo;s largest number of trafficked persons per year. Many of these cases occur by relatives and/or youngsters being tricked by promises of attractive employment overseas.</p>\n\n<p><strong>Our response: Awareness campaigns</strong></p>\n\n<p>&nbsp;</p>\n\n<p><strong>2. Prevention Program</strong></p>\n\n<p>Training in various skills such as tailoring, cosmetology etc. is provided to empower women. Timely awareness campaigns are conducted to educate women in order to prevent them from becoming victims of either the local sex trade or human trafficking.</p>\n\n<p>&nbsp;</p>\n\n<p><strong>3. Holistic Development of exploited &amp; high risk Women </strong></p>\n\n<p>Tens of thousands if not more, young Nepali women are being sexually exploited across Nepal in cabin restaurants, tea shops, dance bars, brothels and on the streets. In India and abroad hundreds of thousands of young Nepali women (if not more) are being sexually exploited and held against their will. With this in mind, Gentle Heart Foundation (GHF) offers long term Recovery Based Programs for women &amp; female youth who have been sexually exploited/trafficked who have chosen to leave the sex trade, or escaped the brothels, or were forced to leave because of age or illness. These Programs are also offered to women and female youth who are at risk of being sexually exploited or trafficked. &nbsp;The long term social return of these Programs is that the women who go through them will able to reintegrate into their communities and become productive members of society.</p>\n\n<p>The Long Term Recovery Based Program is organized into the following phases with the constituent parts of each phase spelled out below the heading.</p>\n\n<p>&nbsp;</p>\n\n<p><strong>a)&nbsp;PHASE I </strong></p>\n\n<p>i. Housing for moms &amp; kids and a Parent Support Center.</p>\n\n<p>ii. Housing for single women - Frontline House</p>\n\n<p>iii. Recovery Day Program and Beginning Vocational &amp; Educational Development.</p>\n\n<p>iv. Housing for Single women from KTM/for women coming back to Nepal from the Rescue Mission in India</p>\n\n<p>v. Childcare and education for the children of the women involved in Phase I and II Programs who are over age 3.</p>\n\n<p>&nbsp;</p>\n\n<p><strong>b)&nbsp;PHASE II </strong></p>\n\n<p>i. Transitional Housing for Women with or without children</p>\n\n<p>ii. Advanced Day Program for Vocational &amp; Educational Development (which includes job shadowing, employment training, paid work experience within or outside GHF, skill development, education and set up in micro enterprises &ndash; &nbsp;for a maximum of 6 years for women involved in Transitional Housing).</p>\n\n<p>&nbsp;</p>\n\n<p><strong>c)&nbsp;PHASE III Followcare Program </strong></p>\n\n<p>i. All Graduated Participants will be given ongoing personal monitoring to ensure that they are achieving their goals and living safe and productive lives.</p>\n\n<p>&nbsp;</p>\n\n<p><strong>d)&nbsp;PHASE IV Servant Leadership Program</strong></p>\n\n<p>i. &nbsp;Opportunities are given within Gentle Heart Foundation for successful participants to mentor and encourage current participants in their recovery journey.</p>\n\n<p>&nbsp;</p>\n\n<p><strong>4. Relief or Emergency Response</strong></p>\n\n<p>GHF is always there to respond the emergency need of the people !</p>\n', ''),
(31, 'How can you help us?', '<p>Gentle Heart is presently supported mainly by Arjun&#39;s personal income from his 7-to-7 job, as well as sporadic contributions by our friends- both in cash and kind. For this reason, out most crucial need at the moment is a regular inflow of finances to allow Arjun to devote more of his time to fathering the children at GH Children&#39;s Home and realising The Big Picture. The following are some ways you can play your part:</p>\n\n<p><strong>Sponsor a child or children</strong></p>\n\n<p>Due to the increase cost of daily commodities, paying house rent, providing proper accommodation, hygienic food, good education, medication, clothing etc. for children at Gentle Heart Children&#39;s Home is very challenging for us. So we desperately need the regular Sponsor, if you want to the cost breakdown, please let us know and we will give you the details and needed information.</p>\n\n<p>&nbsp;</p>\n\n<p><strong>What you will get:</strong></p>\n\n<p>- 3 Personal updates</p>\n\n<p>A report will be emailed to you at the end of each term,providing the latest photograph and updates on your child&#39;s progress,</p>\n\n<p>- 1 General ReportThis will summarise updates and give an overview of the GH Children&#39;s Home and other GHF efforts</p>\n\n<p><br />\n<strong>Sponsor a child or children now</strong></p>\n\n<p>You have an opportunity to make a difference in the lives of children of Nepal today !</p>\n\n<p><strong>Give a donation</strong></p>\n\n<p>You can make a one-off contribution in any of the following ways:<br />\n<br />\n<strong>Financial:- </strong><br />\nIf you are willing to support this ministry financially, please email us at<a href=\"mailto:ghchnepal@mail.com.np\">ghchnepal@mail.com.np</a> and contact us via email for our banking information</p>\n\n<p><strong>In Kind:- </strong><br />\nWe welcome donations of books, clothes toys and similar gifts. If you wish to contribute in this way, please email us at <a href=\"mailto:ghchnepal@mail.com.np\">ghchnepal@mail.com.np</a></p>\n\n<p>&nbsp;</p>\n\n<p><strong>Volunteer</strong></p>\n\n<p>Although we do not run any structured volunteering schemes, we would be happy to have you come over and help out at our home. There are loads of ways to help, from tutoring schoolwork and teaching music lessons to washing up and helping put the kids to bed. Please email us at ghchnepal@mail.com.np if you are interested !</p>\n\n<p>&nbsp;</p>\n\n<p><strong>Pray</strong></p>\n\n<p>For the children, the other family members, the scholarship students, our plans and most importantly, for the many suffering children in Nepal.</p>\n\n<p>&nbsp;</p>\n\n<p><strong>Spread the word</strong></p>\n\n<p>This is perhaps the easiest way to help, but it&#39;s also highly important. Let your friends know, by word of mouth, or by any means !</p>\n', ''),
(32, 'Our Mission', '<p>\n\"To help the Orphaned, underprivileged and destitute children of Nepal as well as high risk girls in their need and help them to feel the fullness of life.\n    Provide them loving and family environment within the home and work for their spiritual, mental, physical, social and educational development.\"</br>\n</p>\n<p>\n    We aim to care the rejected, be a family for the orphan, help the helpless, provide home for the homeless, give hope to the hopeless, and meet the basic\n    needs of needy children and help the poor and needy widows for their better living.\n</p></br>\n<p>\nGod is not unjust; He will not forget your work and the love you have shown Him as you have helped His people and continue to help them. -    <strong>Hebrews 6:10</strong>\n</p>\n<p>\n    Religion that God our Father accepts as pure and faultless is this: to look after orphans and widows in their distress and to keep oneself from being\n    polluted by the world. - <strong>James 1:27</strong>\n</p>', '');

-- --------------------------------------------------------

--
-- Table structure for table `published_news`
--

CREATE TABLE `published_news` (
  `id` int(11) NOT NULL,
  `news_title` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `news_url` varchar(300) NOT NULL,
  `year` varchar(20) NOT NULL,
  `month` varchar(20) NOT NULL,
  `day` varchar(20) NOT NULL,
  `author` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `published_news`
--

INSERT INTO `published_news` (`id`, `news_title`, `news_url`, `year`, `month`, `day`, `author`) VALUES
(1, 'Relief distribution for the earthquake victims of Siddhi', 'http://nagarikaawaj.com/2015/05/5345/', '2015', 'May', '13', 'Shishir Simkhada'),
(2, 'Sewing and Cutting Training Completed', 'http://nepalichristians.com/1737/', '2016', 'Jun', '02', 'NC reporter');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `slider_desc` varchar(400) NOT NULL,
  `url` varchar(400) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `slider_desc`, `url`, `status`) VALUES
(9, 'Gentle Heart Children Home - Family Photo', 'slider_1466762646.jpg', 1),
(10, 'Children expressing their happiness after receiving the educational materials provided by GHF in a remote village of Nepal.', 'slider_1466762688.jpg', 0),
(11, 'Many children are expressing their happiness as they got the privileged for their study', 'slider_1466762789.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fullname` varchar(30) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `admin_type` varchar(20) NOT NULL,
  `parent_admin` varchar(20) NOT NULL,
  `username` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fullname`, `password`, `email`, `phone`, `admin_type`, `parent_admin`, `username`) VALUES
(1, 'Arjun Dhakal', 'e10adc3949ba59abbe56e057f20f883e', 'ghchnepal@mail.com.np', '9841312498', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `verse`
--

CREATE TABLE `verse` (
  `id` int(11) NOT NULL,
  `verse_title` varchar(40) NOT NULL,
  `verse_desc` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `verse`
--

INSERT INTO `verse` (`id`, `verse_title`, `verse_desc`) VALUES
(1, 'James 1:27', 'Religion that God our Father accepts as pure and faultless is this: to look after orphans and widows'),
(2, 'Matthew 11:28-30', 'Come to me, all you who are weary and burdened, and I will give you rest. Take my yoke upon you and learn from me, for I am <b>Gentle</b> and humble in <b>Heart</b>, and you will find rest for your souls. For my yoke is easy and my burden is light.'),
(3, 'Psalm 138:3', 'In the day when I cried out, You answered me, and made me bold with strength in my soul.'),
(4, 'Matthew 19:26', 'But Jesus looked at them and said to them,\"With men this is impossible, but with God all things are possible.\"'),
(5, 'Luke 2:10-11', 'But the angel said to them, \"Do not be afraid. I bring you good news that will cause great joy for all the people. Today in the town of David a Savior has been born to you; he is the Messiah, the Lord.'),
(6, 'James 1:27', 'Religion that God our Father accepts as pure and faultless is this: to look after orphans and widows in their distress and to keep oneself from being polluted by the world.'),
(7, 'Proverbs 31:8-9', 'Speak up for those who cannot speak for themselves, for the rights of all who are destitute. Speak up and judge fairly;   defend the rights of the poor and needy.'),
(8, 'Romans 8:28', 'And we know that in all things God works for the good of those who love him, who have been called according to his purpose.'),
(9, ' Jeremiah 29:11', 'For I know the plans I have for you,â€ declares the Lord, â€œplans to prosper you and not to harm you, plans to give you hope and a future.'),
(10, 'Matthew 25:40', 'The King will reply, \'Truly I tell you, whatever you did for one of the least of these brothers and sisters of mine, you did for me.\''),
(11, 'Psalm 118:14-16', 'The LORD is my strength and my song; he has become my salvation. Shouts of joy and victory resound in the tents of the righteous: \"The LORD\'s right hand has done mighty things! The LORD\'s right hand is lifted high; the LORD\'s right hand has done mighty things!\"');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `children`
--
ALTER TABLE `children`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `published_news`
--
ALTER TABLE `published_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `verse`
--
ALTER TABLE `verse`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `children`
--
ALTER TABLE `children`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `published_news`
--
ALTER TABLE `published_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `verse`
--
ALTER TABLE `verse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
