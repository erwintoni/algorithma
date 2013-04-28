<!--
	Name:		Kenneth Williams, Wes Rockwood, Team One
	Project:		{AlgorithmA}; 2011
	File:		selection.php
	Created:		2011.02.21

	Modified By:	Kenneth Williams, Wes Rockwood, Team One
	Modified:		2011.02.21
	
	Commented By:	Michael Basilious, Documentation Team
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
		<h2>Selection Sort</h2>
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
										<strong><div id="psuedoCode0">procedure select(T[1..n])</div></strong>
										<div id="psuedoCode1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for i &larr; 1 to n do</div>
										<div id="psuedoCode2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;minIndex &larr; i</div>
										<div id="psuedoCode3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for j &larr; i + 1 to n do</div>
										<div id="psuedoCode4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if T[j] < T[minIndex] then</div>
										<div id="psuedoCode5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;minIndex &larr; j</div>
										<div id="psuedoCode6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if minIndex != i then</div>
										<div id="psuedoCode7">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tmp &larr; T[i]</div>
										<div id="psuedoCode8">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;T[i] &larr; T[minIndex]</div>
										<div id="psuedoCode9">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;T[minIndex] = tmp</div>

									</div> 
 
									<div id="tab2" class="tab_content"> 
										<strong><div id="cppLine1">void selectionSort(int arr[], int length) </div></strong>
										<div id="cppLine2">{</div>
										<div id="cppLine3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int i, j, minIndex, tmp;    </div>
										<div id="cppLine4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (i = 0; i < length - 1; i++) </div>
										<div id="cppLine5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{</div>
										<div id="cppLine6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;minIndex = i;</div>
										<div id="cppLine7">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (j = i + 1; j < length; j++)</div>
										<div id="cppLine8">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{</div>
										<div id="cppLine9">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (arr[j] < arr[minIndex])</div>
										<div id="cppLine10">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{</div>
										<div id="cppLine11">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;minIndex = j;</div>
										<div id="cppLine12">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</div>
										<div id="cppLine13">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</div>
										<div id="cppLine14">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (minIndex != i)</div>
										<div id="cppLine15">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{</div>
										<div id="cppLine16">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tmp = arr[i];</div>
										<div id="cppLine17">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;arr[i] = arr[minIndex];</div>
										<div id="cppLine18">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;arr[minIndex] = tmp;</div>
										<div id="cppLine19">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</div>
										<div id="cppLine20">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</div>
										<div id="cppLine21">}</div>
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

				
				<!-- Begin Settings 
					<tr height="20%" id="algo-table-bottom"></tr>
				 End Settings -->
				</table> 		  
		<br/> <br/>
		
		</td>
	  </tr>
	</table>

<!-- End of php -->
		</td>
	  </tr>
	</table>


