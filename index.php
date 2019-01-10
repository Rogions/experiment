<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type="text/css" href="style2.css">
		<script src="script.js"></script>
		<script src="script2.js"></script>
	</head>
	<body>
		<div class="w3-container w3-center"> 
		<h1>Human Perceived Similarity in Music</h1>
		<p>Welcome and thanks for participating in this experiment! Please read the instructions carefully and good luck with the questions!</p>
		</div>
		
		<form id="regForm" action="form.php" method="post">
		
			<div class="tab" style="display:block">
				<p>In this experiment you will listen to a song and compare its harmonic structure to 5 other songs. You will rank the 5 songs according to how similar you perceive the harmonic structure to be. Don't worry if you think this is above your musical skills, we will start with an example.</p>
			</div>
			
			<div class="tab">
				<p> First, please answer all the questions below as honest as possible.</p>
				1. Do you play an instrument? <br>
				<select name="Instrument">
				<option style="display:none;"></option>
				  <option value="YesInst">Yes</option>
				  <option value="NoInst">No</option>
				</select><br>
				2. Have you been educated in musical theory? <br>
				<select name="Education">
				<option style="display:none;"></option>
				  <option value="MTProf">Yes, at a professional level</option>
				  <option value="MTSemi">Yes, during music lessons</option>
				  <option value="MTBasic">I am somewhat familiar with the theory</option>
				  <option value="MTnone">Not at all</option>
				</select><br>
				3. How frequently do you listen to music? <br>
				<select name="Listen">
				<option style="display:none;"></option>
				  <option value="0">Not at all</option>
				  <option value="1">Sometimes</option>
				  <option value="2">Often</option>
				  <option value="3">All the time</option>
				</select><br>
				4. Have you created your own music before? <br>
				<select name="wroteMusic">
				<option style="display:none;"></option>
				  <option value="Yprof">Yes, professionally</option>
				  <option value="Yhob">Yes, hobbyist</option>
				  <option value="Nope">No</option>
				</select><br>
				
			</div>
			
			<div class="tab">
				<h1> Chord Progressions </h1>
				<p> Every song has its own chord progressions. These are sequences of chords that build a song. You can listen to a part of the "4 Chord Song" by Axis of Awesome, they made a medley of songs with the same chord progessions. The Roman numerals show the chords that are being played. In this case those chords are D, A, B minor and G. Everytime this progression is repeated they play the melody of another song over it. </p>
				 <video width="320" height="240" controls> <source src="songs/fourchord.mp4" type="video/mp4"></video> 
				<p> In this experiment you will listen to excerpts of songs. You should try to listen to the chords that are being played, not the individual notes! The chords are played lower than the melody, so it's a good idea to focus on the bass notes. Identifying chords may be difficult, but this experiment is about measuring your perception, so there is no wrong answer here!</p>
			</div>
			
			<div class="tab">
				<p> Okay so you should know what to listen for. Now it is time to explain how you should rank the songs. You can listen to each excerpt as often as you want to, and once you feel confident about how similar you think these songs are, you can adjust the slider to match that perception. More to the left means less similar, more to the right means more similar.</p>
				<p> Below you can listen to two songs from the Beatles. You can adjust the slider to determine how similar you perceive the chord progessions to be. </p>
				<audio controls> <source src="songs/LetItBe.mp3" type="audio/mp3"> </audio> <br>
				<audio controls> <source src="songs/Jude.mp3" type="audio/mp3"> </audio> 
				<div class="slidecontainer">
					<input type="range" min="1" max="100" value="0" class="slider" id="myRange">
					<p id="demo" class="w3-center"></p>
					<script>
					var slider = document.getElementById("myRange");
					var output = document.getElementById("demo");
					output.innerHTML = "Not similar at all"; // Display the default slider value

					// Update the current slider value (each time you drag the slider handle)
					slider.oninput = function() {
						//output.innerHTML = this.value;
						if (this.value < 20) {output.innerHTML = "Not similar at all"}
						if (this.value >= 20 && this.value < 40) {output.innerHTML = "Not very similar"}
						if (this.value >= 40 && this.value < 60) {output.innerHTML = "A little similar"}
						if (this.value >= 60 && this.value < 80) {output.innerHTML = "Pretty similar"}
						if (this.value >= 80) {output.innerHTML = "Very similar"}
					}
					</script>
				
				</div>
			</div>
			
			<div class="tab">
				<p> During this experiment you will receive 4 sets of 6 songs. Each set has 1 base song, and you will have to compare the other 5 songs to that base song. Every set has a different base song.</p>
				<p> If you don't feel you are able to participate, now is the time to say so. Otherwise, we will continue to the actual experiment! </p>
			</div>
		
			
			<div class="tab">
				<h1 class="w3-center">Set 1 - Adele</h1>
				<h3 class="w3-center"> Base song</h3>
				<div class="w3-center">
				<audio controls> <source src="songs/AdeleBase.mp3" type="audio/mp3"> </audio> 
				</div>
				<hr>
				<h3 class="w3-center"> Similarity </h3>
				<div style="overflow-y:scroll; height:300px; background-color:rgba(255, 99, 71, 0.5);">
					<p class="w3-center">Song 1</p>
					<div class="w3-center">
					<audio controls> <source src="songs/S2.mp3" type="audio/mp3"> </audio> 
					</div>
					<div class="slidecontainer">
						<input type="range" min="1" max="100" value="0" class="slider" name="s2">
					</div>
					<hr>
					<p class="w3-center">Song 2</p>
					<div class="w3-center">
					<audio controls> <source src="songs/S3.mp3" type="audio/mp3"> </audio> 
					</div>
					<div class="slidecontainer">
						<input type="range" min="1" max="100" value="0" class="slider" name="s3">
					</div>
					<hr>
					<p class="w3-center">Song 3</p>
					<div class="w3-center">
					<audio controls> <source src="songs/S4.mp3" type="audio/mp3"> </audio> 
					</div>
					<div class="slidecontainer">
						<input type="range" min="1" max="100" value="0" class="slider" name="s4">
					</div>
					<hr>
					<p class="w3-center">Song 4</p>
					<div class="w3-center">
					<audio controls> <source src="songs/S5.mp3" type="audio/mp3"> </audio> 
					</div>
					<div class="slidecontainer">
						<input type="range" min="1" max="100" value="0" class="slider" name="s5">
					</div>
					<hr>
					<p class="w3-center">Song 5</p>
					<div class="w3-center">
					<audio controls> <source src="songs/S6.mp3" type="audio/mp3"> </audio> 
					</div>
					<div class="slidecontainer">
						<input type="range" min="1" max="100" value="0" class="slider" name="s6">
					</div>
					<hr>
				</div>
			</div>
			
			<div class="tab">
				<h1 class="w3-center">Set 2 - Ed Sheeran</h1>
				<h3 class="w3-center"> Base song</h3>
				<div class="w3-center">
				<audio controls> <source src="songs/EdBase.mp3" type="audio/mp3"> </audio> 
				</div>
				<hr>
				<h3 class="w3-center"> Similarity </h3>
				<div style="overflow-y:scroll; height:300px; background-color:rgba(255, 99, 71, 0.5);">
					<p class="w3-center">Song 1</p>
					<div class="w3-center">
					<audio controls> <source src="songs/S7.mp3" type="audio/mp3"> </audio> 
					</div>
					<div class="slidecontainer">
						<input type="range" min="1" max="100" value="0" class="slider" name="s7">
					</div>
					<hr>
					<p class="w3-center">Song 2</p>
					<div class="w3-center">
					<audio controls> <source src="songs/S8.mp3" type="audio/mp3"> </audio> 
					</div>
					<div class="slidecontainer">
						<input type="range" min="1" max="100" value="0" class="slider" name="s8">
					</div>
					<hr>
					<p class="w3-center">Song 3</p>
					<div class="w3-center">
					<audio controls> <source src="songs/S9.mp3" type="audio/mp3"> </audio> 
					</div>
					<div class="slidecontainer">
						<input type="range" min="1" max="100" value="0" class="slider" name="s9">
					</div>
					<hr>
					<p class="w3-center">Song 4</p>
					<div class="w3-center">
					<audio controls> <source src="songs/S10.mp3" type="audio/mp3"> </audio> 
					</div>
					<div class="slidecontainer">
						<input type="range" min="1" max="100" value="0" class="slider" name="s10">
					</div>
					<hr>
					<p class="w3-center">Song 5</p>
					<div class="w3-center">
					<audio controls> <source src="songs/S11.mp3" type="audio/mp3"> </audio> 
					</div>
					<div class="slidecontainer">
						<input type="range" min="1" max="100" value="0" class="slider" name="s11">
					</div>
					<hr>
				</div>
			</div>
			
			<div class="tab">
				<h1 class="w3-center">Set 3 - Coldplay</h1>
				<h3 class="w3-center"> Base song</h3>
				<div class="w3-center">
				<audio controls> <source src="songs/ColdplayBase.mp3" type="audio/mp3"> </audio> 
				</div>
				<hr>
				<h3 class="w3-center"> Similarity </h3>
				<div style="overflow-y:scroll; height:300px; background-color:rgba(255, 99, 71, 0.5);">
				<p class="w3-center">Song 1</p>
				<div class="w3-center">
				<audio controls> <source src="songs/S12.mp3" type="audio/mp3"> </audio> 
				</div>
				<div class="slidecontainer">
					<input type="range" min="1" max="100" value="0" class="slider" name="s12">
				</div>
				<hr>
				<p class="w3-center">Song 2</p>
				<div class="w3-center">
				<audio controls> <source src="songs/S13.mp3" type="audio/mp3"> </audio> 
				</div>
				<div class="slidecontainer">
					<input type="range" min="1" max="100" value="0" class="slider" name="s13">
				</div>
				<hr>
				<p class="w3-center">Song 3</p>
				<div class="w3-center">
				<audio controls> <source src="songs/S14.mp3" type="audio/mp3"> </audio> 
				</div>
				<div class="slidecontainer">
					<input type="range" min="1" max="100" value="0" class="slider" name="s14">
				</div>
				<hr>
				<p class="w3-center">Song 4</p>
				<div class="w3-center">
				<audio controls> <source src="songs/S15.mp3" type="audio/mp3"> </audio> 
				</div>
				<div class="slidecontainer">
					<input type="range" min="1" max="100" value="0" class="slider" name="s15">
				</div>
				<hr>
				<p class="w3-center">Song 5</p>
				<div class="w3-center">
				<audio controls> <source src="songs/S16.mp3" type="audio/mp3"> </audio> 
				</div>
				<div class="slidecontainer">
					<input type="range" min="1" max="100" value="0" class="slider" name="s16">
				</div>
				<hr>
				</div>
			</div>
			
			<div class="tab">
				<h1 class="w3-center">Set 4 - Imagine Dragons</h1>
				<h3 class="w3-center"> Base song</h3>
				<div class="w3-center">
				<audio controls> <source src="songs/ImagineBase.mp3" type="audio/mp3"> </audio> 
				</div>
				<hr>
				<h3 class="w3-center"> Similarity </h3>
				<div style="overflow-y:scroll; height:300px; background-color:rgba(255, 99, 71, 0.5);">
				<p class="w3-center">Song 1</p>
				<div class="w3-center">
				<audio controls> <source src="songs/S17.mp3" type="audio/mp3"> </audio> 
				</div>
				<div class="slidecontainer">
					<input type="range" min="1" max="100" value="0" class="slider" name="s17">
				</div>
				<hr>
				<p class="w3-center">Song 2</p>
				<div class="w3-center">
				<audio controls> <source src="songs/S18.mp3" type="audio/mp3"> </audio> 
				</div>
				<div class="slidecontainer">
					<input type="range" min="1" max="100" value="0" class="slider" name="s18">
				</div>
				<hr>
				<p class="w3-center">Song 3</p>
				<div class="w3-center">
				<audio controls> <source src="songs/S19.mp3" type="audio/mp3"> </audio> 
				</div>
				<div class="slidecontainer">
					<input type="range" min="1" max="100" value="0" class="slider" name="s19">
				</div>
				<hr>
				<p class="w3-center">Song 4</p>
				<div class="w3-center">
				<audio controls> <source src="songs/S20.mp3" type="audio/mp3"> </audio> 
				</div>
				<div class="slidecontainer">
					<input type="range" min="1" max="100" value="0" class="slider" name="s20">
				</div>
				<hr>
				<p class="w3-center">Song 5</p>
				<div class="w3-center">
				<audio controls> <source src="songs/S21.mp3" type="audio/mp3"> </audio> 
				</div>
				<div class="slidecontainer">
					<input type="range" min="1" max="100" value="0" class="slider" name="s21">
				</div>
				<hr>
				</div>
			</div>
			
			
			<div style="overflow:auto;">
			  <div style="float:right;">
				<button type="button" id="prevBtn" onclick="nextPrev(-1)" style="display:none">Previous</button>
				<button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
			  </div>
			</div>
			<div style="text-align:center;margin-top:40px;">
			  <span class="step"></span>
			  <span class="step"></span>
			  <span class="step"></span>
			  <span class="step"></span>
			  <span class="step"></span>
			  <span class="step"></span>
			  <span class="step"></span>
			  <span class="step"></span>
			  <span class="step"></span>
			</div>
		</form>
	</body>
</html>