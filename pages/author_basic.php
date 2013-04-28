<!--
	Name:		Student One, Student Two, Team (One/Two)
	Project:		{AlgorithmA}; 2011
	File:		author_basic.php
	Created:		20XX.XX.XX

	Modified By:	Student Name, Team (One/Two)
	Modified:		20XX.XX.XX
	
	Commented By:	Michael Basilious, Documentation Team
	Commented:	2011.03.21
-->

	<table width="100%" border="0" cellspacing="0" cellpadding="0">
	  <tr>
		<td width="100%" bgcolor="white" class="banner_fill">

	<table width="100%" border="0" align="center" cellpadding="15" cellspacing="0" class="fill_white_bkg">
	  <tr>
		<td align="center">
		<br />
		<h2>Authoring System</h2>		
		<br />

		<!-- Begin Template Table -->		
				<table width="984px" id="algo-table" border="2" cellpadding="5">
					<tr height="5%" class="algo-table-top">
				
				<!-- Begin Contols -->				
						<td colspan="6" class="main-controls">
							<div style="float: left;" align="left" id="control-button-box">
								<button id="s1"  disabled=true onclick="this.disabled=true; StartAnimation();">Demo</button>
								<button id="f1"  disabled=true onclick="Forward();">Forward</button>
								<button id="b1"  disabled=true disabled=true; onclick="Back();">Back</button>

								<button onClick="history.go(0); Res();">Reset</button>
							</div>

							<div style="float: right;" align="right" id="info-button-box">
								<button id="concept" onMouseOut="UnTip();">Concept</button>
								<button id="howto" onMouseOut="UnTip();">How-to</button>
							</div>
						</td>

				<!-- End Controls -->
					</tr>

					<tr height="90%" class="algo-table-middle">
				<!-- Begin Psuedo -->
						<td width="25%" class="psuedocode" id="psuedocode">	
							<div class="container"> 
								<center>Select Animation Class: <br />
									<select id='animselect' onchange="animtype(document.getElementById('animselect').value);">
										<option value="simplesort">Simple Sorts (bubble, selection, insertion, etc.)</option>
										<option value="complexsort">Array-Intensive Sorts (Merge, Quicksort, etc.)</option>
										<option value="basic" selected>Basic Constructs (while, for, etc.)</option>
									</select>
								</center>
								<br /><br />
								<ul class="tabs"> 
									<li><a href="#tab1" onClick="changeType('cpp');">c++</a></li> 
									<li><a href="#tab2" onClick="changeType('pseudo');">Pseudocode</a></li> 
								</ul> 

								<div class="tab_container" style="width: 350px;"> 
									<div id="tab1" class="tab_content"> 
				 				
				 						 <textarea rows=15 cols=39 name='codeinput' id='codeinput'></textarea>
									</div> 

									<div id="tab2" class="tab_content"> 
										<textarea rows=15 cols=39 name='pseudoinput' id='pseudoinput'></textarea>
									</div> 
						
								</div>
							</div> 	


							<button id="loadbtn" type=button onclick='this.disabled=true;getInput();'>Load Code</button>
							<span id="presets">Preset: 
								<select id='presetselect' onchange="presets(document.getElementById('presetselect').value);">
									<option value="none">None</option>
									<option value="for">For</option>
									<option value="while">While</option>
								</select>
							</span>
						</td>
				<!-- End Psuedo -->

				<!-- Begin View -->
						<td colspan="5" align="center" valign="top">
							<div id="container"> <!-- container div for the stacks. Inside this div is Stack divs that each contain one bottom div for the bottom of the stack and one blank image with an arrow id. The blank image is programmed to be replaced with an arrow image in the java script code. Spacer divs are placed between each stack div which represents the black lines between the stacks.  -->
								<div id="Stack1" style="background-color: rgb(100, 205, 55); ">
									<div id="text1" style="background-color: rgb(100, 205, 55); "></div> 
									<div id="bottom1" style="background-color: rgb(10, 105, 55); "></div>
									<div><img id="arrow1" src="images/algorithm/stack/blank.png" height="50px" width="50px"></div>
								</div>

								<div id="spacer1"></div> 

								<div id="Stack2" style="background-color: rgb(100, 205, 55); ">
									<div id="text2" style="background-color: rgb(100, 205, 55); "></div> 
									<div id="bottom2" style="background-color: rgb(10, 105, 55); "></div>
									<div><img id="arrow2" src="images/algorithm/stack/blank.png" height="50px" width="50px"></div>
								</div>

								<div id="spacer2"></div> 

								<div id="Stack3" style="background-color: rgb(100, 205, 55); ">
									<div id="text3" style="background-color: rgb(100, 205, 55); "></div> 
									<div id="bottom3" style="background-color: rgb(10, 105, 55); "></div>
									<div><img id="arrow3" src="images/algorithm/stack/blank.png" height="50px" width="50px"></div>
								</div>

								<div id="spacer3"></div> 

								<div id="Stack4" style="background-color: rgb(100, 205, 55); ">
									<div id="text4" style="background-color: rgb(100, 205, 55); "></div> 
									<div id="bottom4" style="background-color: rgb(10, 105, 55); "></div>
									<div><img id="arrow4" src="images/algorithm/stack/blank.png" height="50px" width="50px"></div>
								</div>

								<div id="spacer4"></div> 

								<div id="Stack5" style="background-color: rgb(100, 205, 55); ">
									<div id="text5" style="background-color: rgb(100, 205, 55); "></div> 
									<div id="bottom5" style="background-color: rgb(10, 105, 55); "></div>
									<div><img id="arrow5" src="images/algorithm/stack/blank.png" height="50px" width="50px"></div>
								</div>

								<div id="spacer5"></div> 

							</div>
						</td>
				<!-- End View -->
					</tr>

				
				<!-- Begin Settings 
				 End Settings -->
				</table> 		  
		<br/> <br/>
		
		</td>
	  </tr>
	</table>

		</td>
	  </tr>
	</table>

