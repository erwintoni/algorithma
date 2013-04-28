<!--
	Name:		Wes Rockwood, Kenneth Williams, Team One
	Project:		{AlgorithmA}; 2011
	File:		gaussian.php
	Created:		2011.02.21

	Modified By:	Wes Rockwood, Kenneth Williams, Team One
	Modified:		2011.03.14
	
	Commented By:	Nathaniel Parrish, Documentation Team
	Commented:	2011.03.16
-->


	<table border="0" cellpadding="0" cellspacing="0" width="100%">
	  <tbody><tr>
		<td class="banner_fill" bgcolor="white" width="100%">

<!-- Start of php -->
	<table class="fill_white_bkg" align="center" border="0" cellpadding="15" cellspacing="0" width="100%">
	  <tbody><tr>
		<td align="center">
		<br />
		<h2>Gaussian Elimination</h2>
		<br />

		<!-- Begin Template Table -->		
				<table id="algo-table" border="2" cellpadding="5" width="984px">
					<tbody><tr class="algo-table-top" height="5%">
				<!-- Begin Contols -->				
						<td colspan="6" class="main-controls">
							<div style="float: left;" id="control-button-box" align="left">
								<button id="s1" onclick="this.disabled=true; InitializeTimer(); StartTheTimer();">Demo</button>
								<button id="f1" onclick="Forward();">Forward</button>

								<button onclick="Res(); history.go(0);">Reset</button>
							</div>

							<div style="float: right;" id="info-button-box" align="right">
								<button id="concept" onmouseout="UnTip();">Concept</button>
								<button id="howto" onmouseout="UnTip();">How-to</button>
							</div>
						</td>

				<!-- End Controls -->
					</tr>

					<tr class="algo-table-middle" height="90%">
				<!-- Begin pseudo -->
						<td class="pseudocode" id="pseudocode" width="25%">

<div class="container"> 
 
	<ul class="tabs">
		<li class="active"><a href="#tab1">Pseudocode</a></li> 
		<li><a href="#tab2">C++</a></li> 
	</ul> 
 
	<div class="tab_container"> 
		<div id="tab1" class="tab_content" style="display: block;font-size:small;"> 
<strong><div id="pseudoCode0">procedure gaussianElimination()</div></strong>
<div id="pseudoCode1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lowerTriangle <- Rows * (Rows + 1) / 2</div>
<div id="pseudoCode2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;state <- 0</div>
<div id="pseudoCode3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if state >= lowerTriangle then</div>
<div id="pseudoCode4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;row <- State - lowerTriangle;</div>
<div id="pseudoCode5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if row >= Rows then</div>
<div id="pseudoCode6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return;</div>
<div id="pseudoCode7">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;normalize(row);</div>
<div id="pseudoCode8">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else if row == col then</div>
<div id="pseudoCode9">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if getElement(row, col) == 0.0 then</div>
<div id="pseudoCode10">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;swap(row);</div>
<div id="pseudoCode11">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if getElement(row, col) == 0.0 then</div>
<div id="pseudoCode12">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return 'Singular!';</div>
<div id="pseudoCode13">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else</div>
<div id="pseudoCode14">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rowAddition(row, col);</div>
<div id="pseudoCode15">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;state <- state + 1;</div>
<div id="pseudoCode16">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;gaussianElimination();</div>
		</div>
 
		<div id="tab2" class="tab_content" style="display: block;font-size:small;"> 
<strong><div id="cppLine0">int gaussianElimination() {</div></strong>
<div id="cppLine1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int row, col;</div>
<div id="cppLine2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int elem = LowerTriangle[State];</div>
<div id="cppLine3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;var lTriangle = Rows * (Rows + 1) / 2;</div>
<div id="cppLine4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (elem) {</div>
<div id="cppLine5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;row = elem.charAt(1);</div>
<div id="cppLine6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;col = elem.charAt(3);</div>
<div id="cppLine7">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</div>
<div id="cppLine8">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (State >= lTriangle) {</div>
<div id="cppLine9">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;row = State - lTriangle;</div>
<div id="cppLine10">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (row >= Rows) return 1;</div>
<div id="cppLine11">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Normalize(row);</div>
<div id="cppLine12">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else if (row == col) {</div>
<div id="cppLine13">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (GetElement(row, col) == 0.0) Swap(row);</div>
<div id="cppLine14">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (GetElement(row, col) == 0.0) return -1;</div>
<div id="cppLine15">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</div>
<div id="cppLine16">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else</div>
<div id="cppLine17">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RowAddition(row, col);</div>
<div id="cppLine18">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;++State;</div>
<div id="cppLine19">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GaussianElimination();</div>
<div id="cppLine20">}</div>
		</div>
	</div> 
</div> 			

	

						</td>
				<!-- End pseudo -->

				<!-- Begin View -->
						<td colspan="5" valign="top">
							<div id="workarea" class="workarea" style="position: relative;">

							</div>
						</td>
				<!-- End View -->
					</tr>

				
				<!-- Begin Settings 
					<tr height="20%" id="algo-table-bottom"></tr>
				 End Settings -->
				</tbody></table> 	
		<!-- End Template Table -->	  
		<br> <br>
		
		</td>
	  </tr>
	</tbody></table>

<!-- End of php file -->
		</td>
	  </tr>
	</tbody></table>

