<?php
session_start();

try {
    if (isset($_SESSION['username'])) {
        $variable = $_SESSION['username'];

        if (isset($_POST['logout'])) {
            session_unset();
            session_destroy();
            header("Location: login.php");
            exit();
        }
    } else {
        throw new Exception("User session not found");
    }
} catch (Exception $e) {
    // يمكنك تنفيذ الإجراءات التصحيحية هنا، مثلاً عرض رسالة الخطأ للمستخدم
    echo "Error: " . $e->getMessage();
    // أو إعادة توجيه المستخدم إلى صفحة خطأ
    // header("Location: error.php");
    // exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="icon" type="image/jpg" href="LOGO.jpg">
    <title>Reddit Clone - Home</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <header>
        <img src="LOGO1.jpg" alt="logo">
        <h1>Reddit Clone</h1>
        <?php echo $variable; ?>
        <form method="post" action="">
            <input type="submit" name="logout" value="تسجيل الخروج">
           
        </form>
    </header>   

    <nav>
        <div class=" flex-container">
        <!-- قائمة بش نتنقل بين صفحات -->
        <ul>
         
            <li><a href="home.php">HOME</a></li>
            <li><a href="http://localhost/re/creatpost.php">CREATE POST</a></li>
            <li><a href="http://localhost/re/addcoment.php">add coment</a></li>
            <li><a href="http://localhost/re/voite.php">add vote</a></li>
            <li><a href="http://localhost/re/search.php">SEARCH</a></li>
            <li><a href="http://localhost/re/sigup.php">SigN-UP</a></li>
            <li><a href="http://localhost/re/login.php">LOGIN</a></li>
            <li><a href="http://localhost/re/update.php">update</a></li>


            
        
        </ul>    
        
    
        </div>
        
    </nav>

    <main>
    
<pre>
 <h2>Welcome to <span class="first-letter" id="re">Reddit</span></h2> 
<span class="first-letter">w</span><strong>hat is Reddit ?</strong>

<strong><em><span class="colored-text">" Reddit  ! "</span></em></strong>     <a href="https://en.wikipedia.org/wiki/Reddit">reddit</a> is an American social news aggregation, content rating, and discussion website. Registered users (commonly referred to as "Redditors") submit content to the site such as links, text posts, images, and videos, which are then voted up or down by other members. Posts are organized by subject into user-created boards called "communities" or "subreddits". Submissions with more upvotes appear towards the top of their subreddit and, if they receive enough upvotes, ultimately on the site's front page. Reddit administrators moderate the communities. Moderation is also conducted by community-specific moderators, who are not Reddit employees.[8] It is operated by Reddit Inc., based in San Francisco.[9][10]
As of October 2023, Reddit is the 18th most-visited website in the world. According to data provided by Similarweb, 48.98% of the 
website traffic comes from the United States, followed by the United Kingdom at 7.06% and Canada at 6.9%.  <img src="whatreddit.jpg"  type="img" id="imgred">
Reddit was founded by University of Virginia roommates Steve Huffman, Alexis Ohanian, and Aaron Swartz in 2005.
Condé Nast Publications acquired the site in October 2006. In 2011, Reddit became an independent subsidiary of Condé Nast's parent company, Advance Publications.[11] In October 2014, Reddit raised $50 million in a funding round led by Sam Altman and including investors Marc Andreessen, Peter Thiel, Ron Conway, Snoop Dogg, and Jared Leto.[12] Their investment valued the company at $500 million at the time.[13][14] In July 2017, Reddit raised $200 million for a $1.8 billion valuation, with Advance Publications remaining    majority stakeholder.[15] In February 2019, a $300 million funding round led by Tencent brought the company's valuation to $3 billion.[16] In August 2021, a $700 million funding round led by Fidelity Investments raised that valuation to over $10 billion.[17] The company then reportedly filed for an IPO in December 2021 with a valuation of $15 billion.[18][19]

Reddit has received praise for many of its features, such as the ability to create several subreddits for niche communities,[20][21] being a platform for raising publicity for numerous causes,[22] and has grown to be one of the most visited websites on the Internet.[23] It has also received criticism for spreading misinformation.[24] Reddit is assessing potential investor appetite to go public in 2024 through initial meetings with banks as the company reported it has confidentially filed IPO paperwork with the SEC. The idea and initial development of Reddit originated with college roommates Steve Huffman and Alexis Ohanian in 2005, who attended a lecture by programmer-entrepreneur Paul Graham in Boston, Massachusetts, during their spring break from University of Virginia.[26][27][28] After
speaking with Huffman and Ohanian following the lecture, Graham invited the two to apply to his startup incubator Y Combinator.[26] Their initial idea, My Mobile Menu, was unsuccessful,[29][30] and was intended to allow users to order food by SMS text messaging.[26][27] During a brainstorming session to pitch another startup, the idea was created for what Graham called the "front page of the Internet".[30] For this idea, Huffman and Ohanian were accepted in Y Combinator's first class.[26][27] Supported by the funding from Y Combinator,[31] Huffman coded the site in Common Lisp[32] and together with Ohanian launched Reddit in June 2005.[33][34] Embarrassed by an empty-looking site, the founders created hundreds of fake users for their posts to make it look more populated,[35] an example of a fake it till you make it strategy.
The team expanded to include Christopher Slowe in November 2005. Between November 2005 and anuary 2006, Reddit merged with Aaron Swartz's company Infogami, and Swartz became an equal owner of the resulting parent company, Not A Bug.[36][37] Ohanian later wrote that instead of labeling Swartz as a co-founder, the correct description is that Swartz's company was acquired by Reddit 6 months after he and Huffman had started.[38] Huffman and Ohanian sold Reddit to Condé Nast Publications, owner of Wired, on October 31, 2006, for a reported $10 million to $20 million[26][39] and the team moved to San Francisco.[39] In November 2006, Swartz blogged complaining about the new corporate environment, criticizing its level of productivity.[40] In January 2007, Swartz was fired for undisclosed reasons.[41]
Huffman and Ohanian left Reddit in 2009.

<img src="what.jpg"  type="img" id="imgred1">
Huffman went on to co-found Hipmunk with Adam Goldstein, and later recruited Ohanian[43] and Slowe to the new company.[44] After Huffman and Ohanian left Reddit, Erik Martin, who joined the company as a community manager in 2008 and later became general manager in 2011, played a role in Reddit's growth.[45] VentureBeat noted that Martin was "responsible for keeping the site going" under Condé Nast's ownership.[46] Martin facilitated the purchase of Reddit Gifts and led charity initiatives.[46]
Reddit launched two different ways of advertising on the site in 2009. The company launched sponsored content[47] and a self-serve ads platform that year.[48][49] Reddit launched its Reddit Gold benefits program in July 2010, which offered new features to editors and created a new revenue stream for the business that did not rely on banner ads.[50] On September 6, 2011, Reddit became operationally independent of Condé Nast, operating as a separate subsidiary of its parent company, Advance Publications.[51] Reddit and other websites participated in a 12-hour sitewide blackout on January 18, 2012, in protest of the Stop Online Piracy Act.[52][53] In May 2012, Reddit joined the Internet Defense League, a group formed to organize future protests.[54]
Yishan Wong joined Reddit as CEO in 2012.[55] Wong resigned from Reddit in 2014, citing disagreements about his proposal to move the company's offices from San Francisco to nearby Daly City, but also the "stressful and draining" nature of the position.[56][57] Ohanian credited Wong with the company's newfound success as its user base grew from 35 million to 174 million.[57] Wong oversaw the company as it raised $50 million in funding and spun off as an independent company.[48] Also during this time, Reddit began

accepting the digital currency Bitcoin for its Reddit Gold subscription service through a partnership with bitcoin payment processor Coinbase in February 2013.[58] Ellen Pao replaced Wong as interim CEO in 2014 and resigned in 2015 amid a user revolt over the firing of a popular Reddit employee.[59] During her tenure, Reddit initiated an anti-harassment policy,[60] banned involuntary sexualization, and banned several forums that focused on bigoted content or harassment of individuals.[61]
After five years away from the company, Ohanian and Huffman returned to leadership roles at Reddit: Ohanian became the full-time executive chairman in November 2014 following Wong's resignation, while Pao's departure on July 10, 2015, led to Huffman's return as the company's chief executive.[62][63] After Huffman rejoined Reddit as CEO, he launched Reddit's iOS and Android apps, improved Reddit's mobile website, and created A/B testing infrastructure.[26] The company launched a major redesign of its website in April 2018.[64] Huffman said new users were turned off from Reddit because it had looked like a "dystopian Craigslist".[64] Reddit also instituted several technological improvements,[65] such as a new tool that allows users to hide posts, comments, and private messages from selected redditors in an attempt to curb online harassment,[66] and new content guidelines. These new content guidelines were aimed at banning content inciting violence and quarantining offensive material.[26][65] Slowe, the company's first employee, rejoined Reddit in 2017 as chief technology officer.[67] Reddit's largest round of funding came in 2017, when the company raised $200 million and was valued at $1.8 billion.[15] The funding supported Reddit's site redesign and video efforts.[15]
On June 5, 2020, Ohanian resigned as a member of the board in response to the George Floyd protests and requested to be replaced "by a Black candidate".[68] Michael Seibel, then-CEO of Y Combinator, was subsequently named to the board.[69]
On December 13, 2020, Reddit announced it had acquired short-form video social platform Dubsmash, hiring its entire team, with the intention of integrating its video creation tools into Reddit.[70] On March 5, 2021, Reddit announced that it had appointed Drew Vollero, who has worked at Snapchat's parent company Snap (SNAP), as its first Chief Financial Officer weeks after the site was thrust into the spotlight due to its role in the GameStop trading frenzy. Vollero's appointment spurred speculation of an initial public offering, a move that senior leaders have considered publicly.[71]
In December 2021, Reddit revealed that it had confidentially filed for an initial public offering with the U.S. Securities and Exchange Commission.[72][73][74] In June 2022, Reddit acquired MeaningCloud, a natural language processing company.[75][76] In September 2022, Reddit acquired Spiketrap for an undisclosed sum.[77] In April 2023, Fidelity, the lead investor in Reddit's funding round in 2021, devalued its investment in Reddit by 41% cumulatively. It was revealed in a monthly disclosure that Fidelity valued its stake at $16.6 million, down from its initial investment of $28.2 million which had valued the company at $10 billion.[78] This was followed by an announcement in June 2023 of plans to layoff 5% of Reddit's workforce and to reduce the number of planned hires for the year.[79]
In June 2023, BlackCat hacker gang claimed responsibility for a February 2023 breach of Reddit's systems. On their data leak site, they claimed that they stole 80 GB of compressed data and demanded a $4.5 million ransom from Reddit. This attack did not involve data encryption like typical ransomware campaigns.[80] Site overview
Reddit is a website comprising user-generated content—including photos, videos, links, and text-based posts—and discussions of this content in what is essentially a bulletin board system.[81][82] The name "Reddit" is a play-on-words with the phrase "read it", i.e., "I read it on Reddit."[83][84] According to Reddit, in 2019, there were approximately 430 million monthly users,[85] who are known as "redditors".[64] The site's content is divided into categories or communities known on-site as "subreddits", of which there are more than 138,000 active communities.[86] Noteworthy subreddits include r/centuryclub, where only Reddit users with 100k+ post or comment karma are allowed to participate in, and r/freekarma4u, where Reddit users give each other free upvotes.
As a network of communities, Reddit's core content consists of posts from its users.[81][82] Users can comment on others' posts to continue the conversation.[81] A key feature to Reddit is that users can cast positive or negative votes, called upvotes and downvotes respectively, for each post and comment on the site.[81] The number of upvotes or downvotes determines the posts' visibility on the site, so the most popular content is displayed to the most people.[81] Users can also earn "karma" for their posts and comments, a status that reflects their standing within the community and their contributions to Reddit.[81] Posts are sometimes automatically archived after six months, meaning they can no longer be commented or voted on.[87]
The most popular posts from the site's numerous subreddits are visible on the front page to those who browse the site without an account.[86][88] By default for those users, the front page will display the subreddit r/popular, featuring top-ranked posts across all of Reddit, excluding not-safe-for-work communities and others that are most commonly filtered out by users (even if they are safe for work).[89][90] The subreddit r/all originally did not filter topics,[91] but as of 2021 it does not include not-safe-for-work content.[92] Registered users who subscribe to subreddits see the top content from the subreddits to which they subscribe on their personal front pages.[86][88] Additionally, some subreddits have a karma and account age requirement to discourage bots and spammers from posting.

Front-page rank—for both the general front page and for individual subreddits—is determined by a combination of factors, including the age of the submission, positive ("upvoted") to negative ("downvoted") feedback ratio, and the total vote-count.[93] Users and moderators
Registering an account with Reddit is free and requires an email address. In addition to commenting and voting, registered users can also create their own subreddit on a topic of their choosing.[94] In Reddit style, usernames begin with "u/". For example, noteworthy redditors include u/Poem_for_your_sprog, who responds to messages across Reddit in verse,[95] u/Shitty_Watercolour who posts paintings in response to posts,[96] u/gallowboob, with the second-highest karma on Reddit,[97] u/spez, the CEO of Reddit (Steve Huffman), and u/DeepFuckingValue, the redditor with the most awardee karma.[98]
Subreddits are overseen by moderators, Reddit users who earn the title by creating a subreddit or being promoted by a current moderator.[86] Reddit users may also request to moderate a sub that has no moderators or very inactive ones in r/redditrequest. These requests are reviewed by the Reddit admins. Moderators are volunteers who manage their communities, set and enforce community-specific rules, remove posts and comments that violate these rules, and generally work to keep discussions in their subreddit on topic.[86][21][99] Admins, by contrast, are paid to work for Reddit.[21]
Reddit also releases transparency reports annually which have information like how many posts have been taken down by moderators and for what reason. It also details information about requests law enforcement agencies have made for information about users or to take down content.[100] In 2020, Reddit removed 6% of posts made on their platform (approx. 233 million). More than 99% of removals were marked as spam; the remainder made up of a mix of other offensive content. Around 131 million posts were removed by the automated moderator and the rest were taken down manually.[101][102]
It is estimated that Reddit's moderators do a total of 466 hours of work every day, which totals up to $3.4 million in unpaid work each year.[103] This roughly equates to 2.8% of the company's annual revenue.[103]


<center><b type ="text"  id="vi">A simple summary of our website in seconds ; Enjoy watching, dear visitor  ;)</b></center>


<center><video src="vid1.mp4"  width="500" height="450" controls></video></center>

</pre>

    </main>
    <footer>
        <p>جميع الحقوق محفوظة &copy; 2024</p>
       <p><strong>Contact Us :</strong> <a href="https://www.reddit.com/user"></p>
            <img src="LOGO.jpg" id="conactlogo" alt="Reddit">
        </a>
    </footer>
</body>
</html>
خذد