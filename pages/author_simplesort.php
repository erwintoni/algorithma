<!--
	Name:		Patrick Ridge, Sean Kooyman, David Cushman
	Project:		{AlgorithmA}; 2011
	File:		author_simplesort.php
	Created:		2011.02.21

	Modified By:	Patrick Ridge, Sean Kooyman, David Cushman
	Modified:		2011.03.14
	
	Commented By:	Nathaniel Parrish, Documentation Team
	Commented:	2011.03.21
-->



	<table width="100%" border="0" cellspacing="0" cellpadding="0">
	  <tr>
		<td width="100%" bgcolor="white" class="banner_fill">

<!-- Start of php -->
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
								<button id="s1" disabled=true onclick="this.disabled=true; InitializeTimer(); StartTheTimer();">Demo</button>
								<button id="f1" disabled=true onclick="Forward();">Forward</button>
								<button id="b1" disabled=true onclick="Back();">Back</button>

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
						<td width="25%" class="psuedocode" id="psuedocode">	<div class="container"> 
<center>Select Animation Class: <br />
<select id='animselect' onchange="animtype(document.getElementById('animselect').value);">
	<option value="simplesort" selected>Simple Sorts (bubble, selection, insertion, etc.)</option>
	<option value="complexsort">Array-Intensive Sorts (Merge, Quicksort, etc.)</option>
	<option value="basic">Basic Constructs (while, for, etc.)</option>
</select></center>
<br /><br />
	<ul class="tabs"> 
		<li><a href="#tab1" onClick="changeType('cpp');">c++</a></li> 
		<li><a href="#tab2" onClick="changeType('pseudo');">Pseudocode</a></li> 
	</ul> 

	<div class="tab_container" style="width: 350px;"> 
		<div id="tab1" class="tab_content"> 
            <textarea rows=15 cols=39 name='codeinput' id='codeinput'>
void sort(int arr[], int length)
{
   //code here
}
</textarea>
		</div> 

		<div id="tab2" class="tab_content"> 
            <textarea rows=15 cols=39 name='pseudoinput' id='pseudoinput'>
procedure sort(T[1..n]) 
   //code here
</textarea>
		</div> 
	</div> 
</div> 	


<button type=button onclick='this.disabled=true;getInput();'>Load Code</button>
<span id="presets">Preset: 
<select id='presetselect' onchange="presets(document.getElementById('presetselect').value);">
	<option value="none">None</option>
	<option value="bubble">Bubble Sort</option>
	<option value="insert">Insertion Sort</option>
	<option value="select">Selection Sort</option>
	<option value="shaker">Shaker Sort</option>
</select>
</span>
						</td>
				<!-- End Psuedo -->

				<!-- Begin View -->
						<td colspan="5" valign="top">
							<div id="workarea" class="workarea" style="position: relative;">
								<div id="box0" class="box">0</div>
								<div id="box1" class="box">1</div>

								<div id="box2" class="box">2</div>
								<div id="box3" class="box">3</div>
								<div id="box4" class="box">4</div>
								<div id="box5" class="box">5</div>
								<div id="box6" class="box">6</div>
								<div id="box7" class="box">7</div>

								<div id="box8" class="box">8</div>
								<div id="box9" class="box">9</div>
								
								<div style="float: left;" align="center" id="box11" class="plain-box-style"></div>
								
								<div id="box10" class="pivot">Compare</div> 
							</div>
						</td>
				<!-- End View -->
					</tr>

				
				<!-- Begin Settings 
					<tr height="20%" id="algo-table-bottom"></tr>
				 End Settings -->
				</table> 		  
		<!-- End Template Table -->
		<br/> <br/>
		
		</td>
	  </tr>
	</table>

<!-- End of php file -->
		</td>
	  </tr>
	</table>




