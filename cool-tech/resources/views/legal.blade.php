<!-- Helper function to convert slugs to full names. -->
<?php
function pageName ($ss){
    if ($ss === 'tos' )
        return 'Terms of Service' ;
        else
            return 'Privacy Policy' ;
}
?>

<!doctype html>
<html >
    <head >
    	<title > {{pageName($subsection)}} </title >
    	<link rel="stylesheet" href="/app.css">
    </head >
    
    <header>
    	<h1>Cool Tech</h1>
    	<h2 > Legal: {{pageName($subsection)}} </h2 >
    </header>
    
    <body >
    <main>    
        <!-- Display the terms of service or the privacy policy, depending on 
        which slug was passed -->
       
        @if ($subsection=== 'tos' )
            
            <!-- TOS from https://termly.io/resources/templates/terms-and-conditions-template/ -->
            <h3>Agreement to terms</h3>

				<p>These Terms and Conditions constitute a legally binding 
				agreement made between you, whether personally or on behalf of 
				an entity (&ldquo;you&rdquo;) and [business entity name] 
				(&ldquo;we,&rdquo; &ldquo;us&rdquo; or &ldquo;our&rdquo;), 
				concerning your access to and use of the [website name.com] 
				website as well as any other media form, media channel, mobile 
				website or mobile application related, linked, or otherwise 
				connected thereto (collectively, the &ldquo;Site&rdquo;).</p>

				<p>You agree that by accessing the Site, you have read, 
				understood, and agree to be bound by all of these Terms and 
				Conditions. If you do not agree with all of these Terms and 
				Conditions, then you are expressly prohibited from using the 
				Site and you must discontinue use immediately.</p>

				<p>Supplemental terms and conditions or documents that may be 
				posted on the Site from time to time are hereby expressly 
				incorporated herein by reference. We reserve the right, in our 
				sole discretion, to make changes or modifications to these 
				Terms and Conditions at any time and for any reason.</p>

				<p>We will alert you about any changes by updating the &ldquo;
				Last updated&rdquo; date of these Terms and Conditions, and you 
				waive any right to receive specific notice of each such change.</p>

				<p>It is your responsibility to periodically review these Terms
				 and Conditions to stay informed of updates. You will be subject 
				 to, and will be deemed to have been made aware of and to have 
				 accepted, the changes in any revised Terms and Conditions by 
				 your continued use of the Site after the date such revised  
				 Terms and Conditions are posted.</p>

				<p>The information provided on the Site is not intended for 
				distribution to or use by any person or entity in any 
				jurisdiction or country where such distribution or use would 
				be contrary to law or regulation or which would subject us to 
				any registration requirement within such jurisdiction or 
				country.</p>

				<p>Accordingly, those persons who choose to access the Site 
				from other locations do so on their own initiative and are 
				solely responsible for compliance with local laws, if and to 
				the extent local laws are applicable.</p>

				<p>The Site is intended for users who are at least 18 years 
				old. Persons under the age of 18 are not permitted to register 
				for the Site.</p>

			<h3>Intellectual property rights</h3>

				<p>Unless otherwise indicated, the Site is our proprietary 
				property and all source code, databases, functionality, 
				software, website designs, audio, video, text, photographs, 
				and graphics on the Site (collectively, the &ldquo;
				Content&rdquo;) and the trademarks, service marks, and logos 
				contained therein (the &ldquo;Marks&rdquo;) are owned or 
				controlled by us or licensed to us, and are protected by 
				copyright and trademark laws and various other intellectual 
				property rights and unfair competition laws of the United 
				States, foreign jurisdictions, and international conventions.</p>

				<p>The Content and the Marks are provided on the Site &ldquo;
				AS IS&rdquo; for your information and personal use only. 
				Except as expressly provided in these Terms and Conditions, no 
				part of the Site and no Content or Marks may be copied, 
				reproduced, aggregated, republished, uploaded, posted, 
				publicly displayed, encoded, translated, transmitted, 
				distributed, sold, licensed, or otherwise exploited for any 
				commercial purpose whatsoever, without our express prior 
				written permission.</p>

				<p>Provided that you are eligible to use the Site, you are 
				granted a limited license to access and use the Site and to 
				download or print a copy of any portion of the Content to 
				which you have properly gained access solely for your 
				personal, non-commercial use. We reserve all rights not 
				expressly granted to you in and to the Site, the Content and 
				the Marks.</p>
        
        @else
            
            <!-- From https://termly.io/resources/templates/privacy-policy-template/ -->
            <h3>Introduction</h3>

				<p>CoolTech (&ldquo;we&rdquo; or &ldquo;us&rdquo; or &ldquo;our
				&rdquo;) respects the privacy of our users (&ldquo;user&rdquo; 
				or &ldquo;you&rdquo;). This Privacy Policy explains how we 
				collect, use, disclose, and safeguard your information when you 
				visit our website www.cool-tech.com, including any other media 
				form, media channel, mobile website, or mobile application 
				related or connected thereto (collectively, the &ldquo;Site
				&rdquo;). Please read this privacy policy carefully. If you do 
				not agree with the terms of this privacy policy, please do not 
				access the site.</p>

				<p>We reserve the right to make changes to this Privacy Policy 
				at any time and for any reason. We will alert you about any 
				changes by updating the &ldquo;Last Updated&rdquo; date of this 
				Privacy Policy. Any changes or modifications will be effective 
				immediately upon posting the updated Privacy Policy on the Site, 
				and you waive the right to receive specific notice of each such 
				change or modification.</p>

				<p>You are encouraged to periodically review this Privacy Policy 
				to stay informed of updates. You will be deemed to have been 
				made aware of, will be subject to, and will be deemed to have 
				accepted the changes in any revised Privacy Policy by your 
				continued use of the Site after the date such revised Privacy 
				Policy is posted.</p>

			<h3>Collection of your information</h3>

				<p>We may collect information about you in a variety of ways. 
				The information we may collect on the Site includes:</p>

			<h4>Personal Data</h4> 
				<p>Personally identifiable information, such as your name, 
				shipping address, email address, and telephone number, and 
				demographic information, such as your age, gender, hometown, 
				and interests, that you voluntarily give to us [when you 
				register with the Site [or our mobile application,] or] when 
				you choose to participate in various activities related to the 
				Site [and our mobile application], such as online chat and 
				message boards. You are under no obligation to provide us with 
				personal information of any kind, however your refusal to do so
				 may prevent you from using certain features of the Site [and 
				 our mobile application].</p>

			<h4>Derivative Data</h4>
				<p>Information our servers automatically collect when you access 
				the Site, such as your IP address, your browser type, your 
				operating system, your access times, and the pages you have 
				viewed directly before and after accessing the Site. [If you are 
				using our mobile application, this information may also include 
				your device name and type, your operating system, your phone 
				number, your country, your likes and replies to a post, and 
				other interactions with the application and other users via 
				server log files, as well as any other information you choose 
				to provide.]</p>
        @endif
     </main>
     </body >    
         
    <footer>
        <x-alert/>
    	<x-footer/>
	</footer>

</html >