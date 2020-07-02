<link href="{{('https://fonts.googleapis.com/css?family=Salsa')}}" rel="stylesheet">
<link href="{{('../css/categories.css')}}" rel="stylesheet">
<link href="{{('../css/bootstrap.css')}}" rel="stylesheet">

@extends('layouts.app')

@section('content')
<!-- content -->
<div id="content">
    <div class="pg-opt-pin">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <h2 style="text-align:center;"> WELCOME TO CLASS</h2>
                </div>
                <div class="col-md-2">
                </div>
            </div>
        </div>
    </div>
</div>
<div id="page-content" class="container" id="accordion">
    <div class="descriptor">
        <h4>JSS 2</h4>
        <p>&nbsp</p>
    </div>

    <div class="panel panel-primary" id="primary">
        <!-- default panel content -->
        <div class="panel-heading">
            <strong>
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" style="color: white;">Computer Ethics</a>
            </strong>
        </div>
        <div id="collapse1" class="panel-collapse collapse">
            <div class="panel-body">
                <!-- <iframe
            src="{{URL::asset("video/Safety Measures.mp4")}}"
            width="854"
            height="480"
            frameborder="0"
            allow="autoplay=false; encrypted-media" style="display:block; margin:0 auto;"
            allowfullscreen>
          </iframe> -->
                <div class="embed-responsive embed-responsive-4by3">
                    <video class="embed-responsive-item" src="{{URL::asset("video/Computer Ethics.mp4")}}"></video>
                </div>
                <!-- <video width="420" height="315" frameborder="0" controls style="display:block; margin:0 auto;">
              <source src="{{URL::asset("video/Computer Ethics.mp4")}}" type="video/mp4" allowfullscreen>
          </video> -->
                <h4><b>Definition of Computer Ethics</b></h4>
                <p>Ethics is a set of moral principles that govern the behavior of a group or individual. Computer ethics can be defined as the set of moral principles that regulate the use of computers.
                    Responsible use of Computer and Internet.</p>

                <p><b>The following are the basic security measures taken to prevent damage to computer system.</b><br>
                    1. There must be adequate ventilation.<br>
                    2. Adequate space must be allowed between each system unit.<br>
                    3. Avoid dust by using cover.<br>
                    4. Avoid moisture.<br>
                    5. Provision of air conditioners and fans or other cooling machines.<br>
                    6. Provision of UPS (Uninterruptible Power Supply) and other electrical appliances to avoid loss of information and electrical damage to the system.<br>
                    7. Adequate care must be taken to storage devices like diskettes, flash drive, CD/DVD writer drive, etc.<br>
                    8. Disallow an unauthorized user from having access to your computer.<br>
                    9. Ensure maximum security to files and information on the computer.<br>
                    10. Provide computer with anti-virus program to avoid viruses.<br>
                    11. Avoiding food particles dropping into the system.<br>
                    12. Unplug the system when not in use for long.<br>
                    13. Check your email regularly.<br>
                    14. Give prompt and polite response to mails.</p>

                <p><b>Reasons for Taking Care of the Computer</b><br>
                    a. To avoid damage to files<br>
                    b. To protect the system<br>
                    c. To prolong the life of the system<br>
                    d. To make the user comfortable for maximum efficiency.</p>

                <p><b>Areas of Misusing the Computer</b><br>
                    The following are areas in which computer can be misused.<br>
                    1. Invasion of privacy (hacking): through the internet, a lot of information can be passed to several places and among people. To this end, the privacy of information cannot be guaranteed; hence someone can have access to another person’s information. People who gain unauthorized access to a computer system or data belonging to somebody else are called a hacker. They invade computer database to steal the identities of other people by obtaining private information about them
                    <br>
                    2. Computer virus: This can affect the computer through the internet where unsolicited information is sent to destroy files in other computers. Computer virus can also occur where diskette, CDs, DVDs, flash drives that are have been corrupted are used in another computer. It is therefore necessary to that anti-virus programs are installed in our computers to detect and clean any virus that may want to attack our computers.
                    <br>
                    3. Fraud: Through the internet and computer networks a lot of deception and scam can be perpetrated by dubious people
                    <br>
                    4. Stealing: people can steal very important documents, information and money through the misuse of computer and the internet.
                    <br>5. Pornography: Children and adults can watch pornographic films and pictures on the internet. These are pictures of nude people and obscene sexual acts on the internet.
                    <br>
                    6. Cyber war: this is the use of computer and the internet in conducting warfare in cyberspace. The type of attacks include web vandalism, propaganda, where political messages can be spread through or to anyone with access to the internet, equipment destruction, where military activities that use computers and satellites for coordination are at risk and their communications and orders intercepted or replaced thereby putting soldier at risk.
                    <br>
                    7. Software piracy: This is the situation where programs written by people are used without their permission.
                    <br>
                    8. Plagiarism: This is the situation where the original works of people especially books and other works are copied verbatim (word for word). Without due acknowledgement of the owner. All this can happen on the internet.
                </p>
            </div>
        </div>
    </div>

    <div class="panel panel-primary" id="primary">
        <!-- default panel content -->
        <div class="panel-heading">
            <strong>
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse2" style="color: white;">Internet</a>
            </strong>
        </div>
        <div id="collapse2" class="panel-collapse collapse">
            <div class="panel-body">
                <!-- <iframe
            src="{{URL::asset("video/Safety Measures.mp4")}}"
            width="854"
            height="480"
            frameborder="0"
            allow="autoplay=false; encrypted-media" style="display:block; margin:0 auto;"
            allowfullscreen>
          </iframe> -->
                <!-- <video width="854" height="480" frameborder="0" controls style="display:block; margin:0 auto;">
                <source src="{{URL::asset("video/Internet.mp4")}}" type="video/mp4" allowfullscreen>
            </video> -->
                <div class="embed-responsive embed-responsive-4by3">
                    <video class="embed-responsive-item" src="{{URL::asset("video/Internet.mp4")}}" allowfullscreen></video>
                </div>
                <h4><b>Definition of Internet</b></h4>

                <p>Internet is a worldwide network of computers that share information. The Internet is a global network connecting millions of computers. It is also defined as a global system of interconnected computer networks that use the Internet protocol suite to link devices worldwide.</p>
                <p><b>Internet Terms</b><br>
                    1. Cyber café: An internet café or cyber café is a place which provides internet access to the public, usually for a fee.<br>
                    2. Download: To transfer a file from remote computer to a local computer. In other words, it means to transfer a file from a web server to a web client.<br>
                    3. Upload: To transfer a file from a local computer to a remote computer. In other words, it means to transfer a file from a web client to a web server.<br>
                    4. E-mail: An email is a mail that is electronically transmitted by your computer.<br>
                    5. Email Address: An email address is the name for an electronic postbox that can receive and send email messages on a network. An email address consists of two parts, which are the username and the domain name. In steve@example.com, steve is the username and example.com is the domain-part. The domain name part of an email address is case insensitive. The local mailbox part, however, is case sensitive. Examples of email addresses are: okolojoe90@yahoo.com, uvajoy@gmail.com, ugbainnocentugbajbr@hotmail.com etc.<br>
                    6. Homepage or Home page: It is the first page that appears when you visit any website. It is also the page of a Web site that provides the introduction or content with links.<br>
                    7. HTTP: HTTP is an abbreviation for Hypertext Transfer Protocol. It is the set of rules by which Web pages are transferred across the Internet.<br>
                    8. URL: URL Stands for "Uniform Resource Locator." A URL is the address of a specific webpage or file on the Internet.<br>
                    9. World Wide Web (WWW): It is defined as part of the internet that contains linked text, image sound, and video documents.<br>
                    10. Website: A Website is a collection of World Wide Web pages or files. Examples of website address include: www.uniqueschoolsmakurdi.com.ng, www.nairaland.com, www.waeconline.org, www.uniquesecschmkd.blogspot.com.ng etc<br>
                    11. Webpage: A Web page is a single hypertext file or a page that is part of a Web site<br>
                    12. Web server: A server is a computer that delivers web content to web browser.<br>
                    13. HTML (Hypertext Markup Language). It is the language of the web.<br>
                    14. ISP (Internet Service Provider): ISP is an organisation that provides access to the internet and web hosting.<br>
                    15. Browse: The term to describe a user’s movement across the web<br>
                    16. Web Browser (Internet Browser): A software program used to display WebPages. It is also defined as is a software application for retrieving, presenting, and traversing (moving through) information resources on the World Wide Web.</p>

                <p><b>Types of Internet Browser</b><br>
                    a. Mozilla fire fox<br>
                    b. Opera browser<br>
                    c. Microsoft Internet explorer (Microsoft edge)<br>
                    d. Google Chrome<br>
                    e. Apple Safari, etc</p>

                <p><b>Features of Internet Browser</b><br>
                    An internet browser has many different parts. They include:<br>
                    1. Title bar: Displays the title of the open web page<br>
                    2. Menu bar: The menu bar can be used to activate commands. Depending on the browser you are using, some contain the following: File, edit, view, tools, Bookmark, help, etc<br>
                    3. Address Bar: An address bar is a component of an Internet browser which is used to input and show the address of a website. The web address is generally given in lowercase letters and is case insensitive. There are no spaces in a webpage or website address.<br>
                    4. Status Bar: Status bar displays the status of the current page<br>
                    5. Scroll Bar: This provides vertical or horizontal scrolling through the web pages.<br>
                    6. Standard tool bar: Standard tool bar has many different buttons.</p>

                <p><b>They are explained below.</b><br>
                    a. Back: To go back to previously viewed page<br>
                    b. Forward: To move forward to a page which was viewed<br>
                    c. Stop: To halt loading of webpage.<br>
                    d. Refresh/Reload: To refresh the contents of the currently displayed webpage from the start<br>
                    e. Home: To go to the homepage of the currently viewed website.<br>
                    f. History: It displays a list of previously viewed website<br>
                    g. Print: Prints the webpage with the default printer settings.</p>

                <p><b>Uses of the Internet</b><br>
                    1. The Internet is used for communication to any part of the world<br>
                    2. The internet is used to search for information on the web through search engines<br>
                    3. It is used in sending and receiving messages.<br>
                    4. It is used for chatting<br>
                    5. It can be used in planning of trip. E,g. GPS.<br>
                    6. It can be used for advertisement and marketing. Etc</p>

                <p><b>Benefits of the internet</b><br>
                    a. It enables us to share resources globally.<br>
                    b. Internet allows access to information in a very fast manner.<br>
                    c. It is cost effective.<br>
                    d. It allows online banking transactions.<br>
                    e. E-education<br>
                    f. E-friends<br>
                    g. E-entertainment</p>

                <p><b>Abuse of the Internet</b><br>
                    1. It is used by imposters to defraud people<br>
                    2. Piracy of software<br>
                    3. Pornography<br>
                    4. Hacking<br>
                    5. Plagiarism<br>
                    6. Computer virus</p>

                <p><b>Definition of Electronic Mail</b><br>
                    Electronic mail, commonly called email or e-mail, is a method of exchanging digital messages from an author to one or more recipients. It can also be defined as a system for sending and receiving messages electronically over a computer network.</p>

                <p><b>Steps to Create Email Account</b><br>
                    Follow the steps below to create email account<br>
                    1. Click On a web browser<br>
                    2. Visit a website that offers an email service e.g. www.gmail.com<br>
                    3. Click on the Free Sign Up Button<br>
                    4. Enter all mandatory fields (First Name, Last Name, Gender, etc.)<br>
                    5. Click the "Accept" - Button underneath</p>

                <p><b>Procedure for sending an Email</b><br>
                    1. Log in to your email account<br>
                    2. Click Compose.<br>
                    3. A new blank email window will open up. In the ‘To’ box, type in the email address of the recipient.<br>
                    4. You might want to include someone else in your email to ‘keep them in the loop’. You can do this by clicking Cc or Bcc, which will open another field. ‘Cc’ means ‘carbon copy’ and ‘Bcc’ means ‘blind carbon copy’<br>
                    5. Type in the subject of the email. The subject field allows you to give the recipient an idea of the topic of your email, like a heading.<br>
                    6. Type your message in the main body field of your email.<br>
                    7. Email text can be formatted in a similar way to text in a word document.<br>
                    8. Click the Send button at the bottom of the compose window.</p>
            </div>
        </div>
    </div>
    <div class="panel panel-primary" id="primary">
        <!-- default panel content -->
        <div class="panel-heading">
            <strong>
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse3" style="color: white;">Safety Measures</a>
            </strong>
        </div>
        <div id="collapse3" class="panel-collapse collapse">
            <div class="panel-body">
                <!-- <iframe
            src="{{URL::asset("video/Safety Measures.mp4")}}"
            width="854"
            height="480"
            frameborder="0"
            allow="autoplay=false; encrypted-media" style="display:block; margin:0 auto;"
            allowfullscreen>
          </iframe> -->
                <!-- <video width="854" height="480" frameborder="0" controls style="display:block; margin:0 auto;">
                <source src="{{URL::asset("video/Safety Measures.mp4")}}" type="video/mp4" allowfullscreen>
            </video> -->
                <div class="embed-responsive embed-responsive-4by3">
                    <video class="embed-responsive-item" src="{{URL::asset("video/Safety Measures.mp4")}}" allowfullscreen></video>
                </div>
                <br>
                <p>There are safety measures that the users of computers need to take in order to enjoy the use of computers. There are:<br>
                    (i) Good Sitting Posture<br>
                    The sitting posture of the user of computer should be comfortable so that backache, neck pains, wrist injuries and eye strain will be reduced to the barest level. The sitting posture should allow one to sit with both feet on the floor, thighs at right angles to the body. The chair should be adjustable to support the lower back while the fore arms should be kept parallel to the floor. The eye level should be straight to the screen while keeping the wrist and hands relaxed as one type on the keyboard.
                    <br>
                    (ii) Use of Anti-glare Protector<br>
                    The use of anti-glare protector helps protect the eyes against radioactive rays coming from the computer monitor. It is important to keep a distance of two feet between the eyes and the monitor when working on the computer. It is also very important to blink the eyes regularly if one is working on a colour monitor.
                    <br>
                    (iii) Proper Positioning of Monitor Base<br>
                    The monitor should be well positioned for it to stand very well and also to give room for it to be adjusted sideways, up or down while it is being used.
                    <br>
                    (iv) Illuminating the Computer Room<br>
                    The computer room should be well lit with fluorescent light. This is to enable one to see very well the things that are been done on the computer. It will also remove eye strains from the user on the computer monitor.<br>
                    (v) Maintaining a Dust-free Environment<br>
                    Computers are very sensitive electronic machines. They can easily get damage by dust, moisture and temperature, hence the need to ensure that the environment is where computer are kept and used are dust-free. Computer laboratory floors should be made with floor tiles and not rug. The window should be air tight and air-conditioned.
                    <br>
                    (vi) Keep Liquid away from Computers<br>
                    Liquids of any type and food droplets can cause a lot of physical damage to the computer hardware. This is why it is important to keep all liquids away from the computer.
                </p>
            </div>
        </div>
    </div>
    <div class="container">

        <div class="panel-body">
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif

            <div class="flex-center position-ref blur">
                <div class="links">
                    <!-- <a href="{{route('examinfo.create')}}" style="background-color: #ff9f3b;padding: 10px;margin: 10px;color: black;border-radius: 5px;">Create Test</a> -->
                    <a href="{{route('student.index')}}" style="background-color: #ff9f3b;padding: 10px;margin: 10px;color: black;border-radius: 5px;">Take Test</a>
                    <a href="{{route('result.index')}}" style="background-color: #ff9f3b;padding: 10px;margin: 10px;color: black;border-radius: 5px;">Result</a>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection