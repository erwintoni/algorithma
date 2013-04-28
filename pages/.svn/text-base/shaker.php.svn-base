<!--
	Name:		Kenneth Williams, Wess Rockwood, Team One
	Project:		{AlgorithmA}; 2011
	File:		shaker.php
	Created:		2011.02.21

	Modified By:	Kenneth Williams, Wess Rockwood, Team One
	Modified:		2011.03.16
	
	Commented By:	Michael Basilious, Documentation Team
	Commented:	2011.03.21
-->

	<table border="0" cellpadding="0" cellspacing="0" width="100%">
	  <tbody><tr>
		<td class="banner_fill" bgcolor="white" width="100%">

<!-- Start of php -->
	<table class="fill_white_bkg" align="center" border="0" cellpadding="15" cellspacing="0" width="100%">
	  <tbody><tr>
		<td align="center">
		<br>
		<h2>Shaker Sort</h2>
		<br>

		<!-- Begin Template Table -->		
				<table id="algo-table" border="2" cellpadding="5" width="984px">
					<tbody><tr class="algo-table-top" height="5%">
				<!-- Begin Contols -->				
						<td colspan="6" class="main-controls">
							<div style="float: left;" id="control-button-box" align="left">
								<button id="s1" onclick="this.disabled=true; InitializeTimer(); StartTheTimer();">Demo</button>
								<button id="f1" onclick="Forward();">Forward</button>
								<button onclick="history.go(0); Res();">Reset</button>
							</div>

							<div style="float: right;" id="info-button-box" align="right">
								<button id="concept" onmouseout="UnTip();">Concept</button>
								<button id="howto" onmouseout="UnTip();">How-to</button>
							</div>
						</td>

				<!-- End Controls -->
					</tr>

					<tr class="algo-table-middle" height="90%">
				<!-- Begin Psuedo -->
						<td class="psuedocode" id="psuedocode" width="25%">

							<div class="container"> 
	 
								<ul class="tabs"> 
									<li class="active"><a href="#tab1">Pseudocode</a></li> 
									<li><a href="#tab2">C++</a></li> 
								</ul> 
 
	<div class="tab_container"> 
		<div style="display: block;" id="tab1" class="tab_content"> 
<strong><div id="psuedoCode0">procedure shakerSort(T[1..n])</div></strong>
<div id="psuedoCode1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;swapped ← 1</div>
<div id="psuedoCode2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;j ← 0</div>
<div id="psuedoCode3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;length ← n - 1</div>
<div id="psuedoCode4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;while (swapped = 1)</div>
<div id="psuedoCode5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;swapped ← 0</div>
<div id="psuedoCode6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;j ← j + 1</div>
<div id="psuedoCode7">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for i ← 0 to n - j do</div>
<div id="psuedoCode8">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if
 T[i] &gt; T[i+1] then</div>
<div id="psuedoCode9">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tmp
 ← T[i]</div>
<div id="psuedoCode10">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;T[i]
 ← T[i+1]</div>
<div id="psuedoCode11">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;T[i+1]
 ← tmp</div>
<div id="psuedoCode12">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;swapped
 ← 1</div>
<div id="psuedoCode13">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if
 swapped = 0 then</div>
<div id="psuedoCode14">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;exit while loop</div>
<div id="psuedoCode15">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;swapped ← 0</div>
<div id="psuedoCode16">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;length ← length - 1</div>
<div id="psuedoCode17">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for i ← length - 1 to j do</div>
<div id="psuedoCode18">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if
 T[i] &gt; T[i+1] then</div>
<div id="psuedoCode19">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tmp
 ← T[i + 1]</div>
<div id="psuedoCode20">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;T[i + 1] ← T[i]</div>
<div id="psuedoCode21">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;T[i] ← tmp</div>
<div id="psuedoCode22">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;swapped
 ← 1</div>
		</div>
 
		<div style="display: none;" id="tab2" class="tab_content"> 
<strong><div id="cppLine0">void shakerSort(int arr[], int length) </div></strong>
<div id="cppLine1">{</div>
<div id="cppLine2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bool swapped = true;</div>
<div id="cppLine3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int j = -1;</div>
<div id="cppLine4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int tmp;</div>
<div id="cppLine5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;while (swapped)</div> 
<div id="cppLine6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{</div>
<div id="cppLine7">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;swapped = false;</div>
<div id="cppLine8">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;++j;</div>
<div id="cppLine9">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (int i = j; i &lt; length; ++i) </div>
<div id="cppLine10">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{</div>
<div id="cppLine11">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if
 (arr[i] &gt; arr[i + 1]) </div>
<div id="cppLine12">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{</div>
<div id="cppLine13">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tmp
 = arr[i];</div>
<div id="cppLine14">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;arr[i]
 = arr[i + 1];</div>
<div id="cppLine15">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;arr[i
 + 1] = tmp;</div>
<div id="cppLine16">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;swapped
 = true;</div>
<div id="cppLine17">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</div>
<div id="cppLine17">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</div>
<div id="cppLine18">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (swapped == false)</div>
<div id="cppLine19">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{</div>
<div id="cppLine20">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;</div>
<div id="cppLine21">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</div>
<div id="cppLine22">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;swapped = false;</div>
<div id="cppLine23">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--length;</div>
<div id="cppLine24">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (int i = length - 1; i >= j; --i)</div>
<div id="cppLine25">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{</div>
<div id="cppLine26">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (arr[i] > arr[i + 1])</div>
<div id="cppLine27">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{</div>
<div id="cppLine28">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tmp = arr[i + 1];</div>
<div id="cppLine29">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;arr[i + 1] = arr[i];</div>
<div id="cppLine30">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;arr[i] = tmp;</div>
<div id="cppLine31">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;swapped = true;</div>
<div id="cppLine32">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</div>
<div id="cppLine33">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</div>
<div id="cppLine34">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</div>
<div id="cppLine35">}</div>
		</div> 
	</div> 
</div> 			

						</td>
				<!-- End Psuedo -->

				<!-- Begin View -->
						<td colspan="5" valign="top">
							
							<div id="workarea" class="workarea" style="position: relative;">
								<div id="box0" class="box">3</div>
								<div id="box1" class="box">1</div>
								<div id="box2" class="box">0</div>
								<div id="box3" class="box">6</div>
								<div id="box4" class="box">5</div>
								<div id="box5" class="box">4</div>
								<div id="box6" class="box">7</div>
								<div id="box7" class="box">2</div>
								<div id="box8" class="box">9</div>
								<div id="box9" class="box">8</div>
								<div style="float: left;" id="box11" class="plain-box-style" align="center"></div>
								<div id="box10" class="pivot">Compare</div> 
							</div>
						
						</td>
				<!-- End View -->
					</tr>

					
				<!-- Begin Settings 
					<tr height="20%" id="algo-table-bottom"></tr>
				 End Settings -->
				</tbody></table> 		  
		<br> <br>
		
		</td>
	  </tr>
	</tbody></table>

<!-- End of php -->
		</td>
	  </tr>
	</tbody></table>

