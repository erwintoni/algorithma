<!--
	Name:		Student One, Student Two, Team (One/Two)
	Project:		{AlgorithmA}; 2011
	File:		bubble.php
	Created:		20XX.XX.XX

	Modified By:	Student Name, Team (One/Two)
	Modified:		20XX.XX.XX
	
	Commented By:	Michael Basilious, Documentation Team
	Commented:	2011.03.02
-->

	<table width="100%" border="0" cellspacing="0" cellpadding="0">
	  <tr>
		<td width="100%" bgcolor="white" class="banner_fill">

<!-- Start of php -->
	<table width="100%" border="0" align="center" cellpadding="15" cellspacing="0" class="fill_white_bkg">
	  <tr>
		<td align="center">
		<br />
		<h2>Bubble Sort</h2>
		<br />

		<!-- Begin Template Table -->		
				<table width="984px" id="algo-table" border="2" cellpadding="5">
					<tr height="5%" class="algo-table-top">
				<!-- Begin Contols -->				
						<td colspan="6" class="main-controls">
							
							<div style="float: left;" align="left" id="control-button-box">
								<button id="s1" onclick="this.disabled=true; InitializeTimer(); StartTheTimer();">Demo</button>
								<!-- <button id="f1" onclick="Forward();">Forward</button> -->
								
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

								<ul class="tabs"> 
									<li><a href="#tab1">Pseudocode</a></li> 
									<li><a href="#tab2">C++</a></li> 
								</ul> 

							<div class="tab_container"> 
								
								<div id="tab1" class="tab_content"> 
									
									<strong><div id="psuedoCode0">procedure bubbleSort(T[1..n])</div></strong>

<div id="psuedoCode1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;swapped &larr; 1</div>
<div id="psuedoCode2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;j &larr; 0</div>
<div id="psuedoCode3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;length &larr; n - 1</div>
<div id="psuedoCode4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;while (swapped = 1)</div>
<div id="psuedoCode5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;swapped &larr; 0</div>
<div id="psuedoCode6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;j &larr; j + 1</div>
<div id="psuedoCode7">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for i &larr; 0 to n - j do</div>
<div id="psuedoCode8">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if T[i] > T[i+1] then</div>
<div id="psuedoCode9">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tmp &larr; T[i]</div>
<div id="psuedoCode10">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;T[i] &larr; T[i+1]</div>
<div id="psuedoCode11">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;T[i+1] &larr; tmp</div>
<div id="psuedoCode12">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;swapped &larr; 1</div>
		</div> 
 
		<div id="tab2" class="tab_content"> 
<strong><div id="cppLine0">void bubbleSort(int arr[], int length) </div></strong>
<div id="cppLine1">{</div>
<div id="cppLine2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bool swapped = true;</div>
<div id="cppLine3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int j = 0;</div>
<div id="cppLine4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int tmp;</div>
<div id="cppLine5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;while (swapped)</div> 
<div id="cppLine6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{</div>
<div id="cppLine7">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;swapped = false;</div>
<div id="cppLine8">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;j++;</div>
<div id="cppLine9">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (int i = 0; i < length - j; i++) </div>
<div id="cppLine10">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{</div>
<div id="cppLine11">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (arr[i] > arr[i + 1]) </div>
<div id="cppLine12">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{</div>
<div id="cppLine13">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tmp = arr[i];</div>
<div id="cppLine14">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;arr[i] = arr[i + 1];</div>
<div id="cppLine15">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;arr[i + 1] = tmp;</div>
<div id="cppLine16">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;swapped = true;</div>
<div id="cppLine17">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</div>
<div id="cppLine18">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</div>
<div id="cppLine19">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</div>
<div id="cppLine20">}</div>
		</div> 
	</div> 
</div> 			

	

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

				
				<!-- Begin Settings -->
					
					<!-- <tr height="20%" id="algo-table-bottom"></tr> -->

				<!-- End Settings -->

<!-- Bottom box --> 
 <div id="bottombox"> <p></p> </div> </td> 
<!-- End Bottom box --> 

				
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

