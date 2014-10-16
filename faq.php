<div id="accordian">

	<h1>Frequently Asked Questions</h1>
    <p>We will try to answer all your questions as accurately as possible.</p>
    <p>If you can’t find the information you need, feel free to contact us.</p>
    <br/>
    <br/>
	
	<ul>
		
		<li class="faqlist">
			<h3><span class="icon-tasks">What is the price of a ticket?</span></h3>
			<ul>
				<br/>
				<li>Each ticket cost 35 euro's.</li>
				<br/>
			</ul>
		</li>

		<li class="faqlist">
			<h3><span class="icon-tasks">How would I get my ticket?</span></h3>
			<ul>
				<br/>
				<li>A ticket is a bracelet. It contains electronically stored information. After purchasing your ticket online, it will be delivered to your home address.</li>
                <li>This bracelet will be scanned at the entrance of the event.</li>
				<br/>
			</ul>
		</li>
                    
		<li class="faqlist">
			<h3><span class="icon-tasks">I didn’t receive a confirmation e-mail. What should I do?</span></h3>
			<ul>
				<br/>
				<li>First, please check your spam/junk folder. Many spam filters will put legitimate emails in the spam folder.</li>
                <br/>
                <li>Please wait for a few hours. Most confirmation emails will take a few minutes to reach you but sometimes they can get stuck somewhere along the way and take longer.</li>
                <br/>
                <li>If you have tried all of these steps, and you have still not received a confirmation email, go to contact us and send us a message with the subject line "Confirmation". Also in the email address line, please fill in the same email address you used when buying a ticket.</li>
				<br/>
			</ul>
		</li>

		<li class="faqlist">
			<h3><span class="icon-tasks">How many tickets can I buy?</span></h3>
			<ul>
				<br/>
				<li>There is a maximum of 5 tickets per order. To do so, you will need the first name and last name of the people you are buying tickets for. Please keep in mind that you cannot change the names of the tickets after it has been purchased.</li>
				<br/>
			</ul>
		</li>
        
		<li class="faqlist">
			<h3><span class="icon-tasks">Can I change the name of an already bought ticket?</span></h3>
			<ul>
				<br/>
				<li>This is not possible. However, small spelling mistakes will not cause problems for you.</li>
				<br/>
			</ul>
		</li>
        
		<li class="faqlist">
			<h3><span class="icon-tasks">Can I buy ticket at the entry of the event?</span></h3>
			<ul>
				<br/>
				<li>Yes, you can. At the entrance, the tickets will cost 10 euro's more than the online price.</li>
                <li>Keep in mind that purchasing a ticket with cash is not possible.</li>
				<br/>
			</ul>
		</li>
        
		<li class="faqlist">
			<h3><span class="icon-tasks">What are the different payment methods?</span></h3>
			<ul>
				<br/>
                <li>PayPal</li>
                <li>iDeal</li>
                <li>Visa</li>
                <li>MasterCard</li>
				<br/>
			</ul>
		</li>

		<li class="faqlist">
			<h3><span class="icon-tasks">Can I cancel my ticket and get a refund?</span></h3>
			<ul>
				<br/>
				<li>Unfortunately, a bought ticket is non-refundable.</li>
				<br/>
			</ul>
		</li>	

		<li class="faqlist">
			<h3><span class="icon-tasks">How many people can rent/reserve one camping spot?</span></h3>
			<ul>
				<br/>
				<li>One person will have to reserve the camping spot with his/her account and pay for the group. A maximum of 6 members can use the camping spot.</li>
                <li>Upon reserving the camping spot, we will ask for the individual account numbers of the members of your desired group.</li>
				<br/>
			</ul>
		</li>	
        
		<li class="faqlist">
			<h3><span class="icon-tasks">Can I rent a camping spot at the event?</span></h3>
			<ul>
				<br/>
				<li>If there is availability, you can rent a camping spot.</li>
				<br/>
			</ul>
		</li>

		<li class="faqlist">
			<h3><span class="icon-tasks">Where is the event taking place?</span></h3>
			<ul>
				<br/>
				<li>This event is taking place on the "Landgoed BörkerHeide".</li>
				<li>Beilerstraat 13a, 9431 GA Westerbork</li>
				<br/>
			</ul>
		</li>
		
	</ul>
</div>

<script>
	$(document).ready(function(){
		$("#accordian h3").click(function(){
			//slide up all the link lists
			$("#accordian ul ul").slideUp();
			//slide down the link list below the h3 clicked - only if its closed
			if(!$(this).next().is(":visible"))
			{
				$(this).next().slideDown();
			}
		})
	})
</script>