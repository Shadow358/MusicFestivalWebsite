$(document).ready(function(){
	
	/*$("div.content").load("home.php");*/
	$("div.content").load("home.php");

// Menu clicks
{
	$("#menuHome").click(function(){
		$("div.content").load("home.php");
	})
	
	$("#menuTickets").click(function(){
		$("div.content").load("tickets.php");
	})
	
	$("#menuEvent").click(function(){
		$("div.content").load("event.php");
	})
	
	$("#menuFaq").click(function(){
		$("div.content").load("faq.php");
	})
	
	$("#menuAboutus").click(function(){
		$("div.content").load("aboutus.php");
	})
}
})