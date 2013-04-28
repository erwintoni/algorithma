<!--
	Name:		Student One, Student Two, Team (One/Two)
	Project:		{AlgorithmA}; 2011
	File:		stack.php
	Created:		20XX.XX.XX

	Modified By:	Student Name, Team (One/Two)
	Modified:		20XX.XX.XX
	
	Commented By:	Nathaniel Parrish, Documentation Team
	Commented:	2011.03.07
-->




	<table width="100%" border="0" cellspacing="0" cellpadding="0">
	  <tr>
		<td width="100%" bgcolor="white" class="banner_fill">

<!-- Start of php -->
	<table width="100%" border="0" align="center" cellpadding="15" cellspacing="0" class="fill_white_bkg">
	  <tr>
		<td align="center">
		<br />
		<h2>Stack</h2>		
		<br />
			<!-- Begin Template Table -->
				<table width="984px" id="algo-table" border="2" cellpadding="5">
					<tr height="5%" class="algo-table-top">
				<!-- Begin Contols -->				
						<td colspan="6" class="main-controls">
						
							<div style="float: left;" align="left" id="control-button-box">
								<button  onClick="pushCode()">Push Back</button>
								<button  onClick="popCode()">Pop Back</button>
								
								<button  onClick="window.location.reload()">Reset</button>
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
						<td width="25%" valign="top" class="psuedocode" id="psuedocode">

<div class="container"> 
 
	<ul class="tabs"> 
		<li><a href="#tab1">Pseudocode</a></li> 
		<li><a href="#tab2">C++</a></li> 
	</ul> 
 
	<div class="tab_container"> 
		<div id="tab1" class="tab_content" style="font-size:small;"> 

				
							<div id = "codecontain"><!-- code view -->
								<div class="text" id="function1">Pushback</div>
								<div class="text" id="function2">procedure push_back(i : integer)</div>
								<div class="text" id="function3">newNode : pointer <- value</div>
								<div class="text" id="function4">BEGIN</div>
								<div class="text" id="function5">&nbsp&nbsp&nbsp&nbsp newNode.value <- i</div>
								<div class="text" id="function6">&nbsp&nbsp&nbsp&nbsp if list.first = list.last then</div>
								<div class="text" id="function7">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp list.first <- newNode</div>
								<div class="text" id="function8">&nbsp&nbsp&nbsp&nbsp else</div>
								<div class="text" id="function9">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp list.last.next = newNode</div>
								<div class="text" id="function10">&nbsp&nbsp</div>
								<div class="text" id="function11">&nbsp&nbsp&nbsp&nbsp list.last <- newNode</div>
								<div class="text" id="function12">&nbsp&nbsp&nbsp&nbsp newNode.next <- NULL</div>
								<div class="text" id="function13">END</div>
							</div>
		</div> 
 
		<div id="tab2" class="tab_content" style="font-size:small;"> 
<pre>
class Stack
{
  public:
    bool empty() const {return container.empty();}
    unsigned int size() const {return container.size();}
    void push(const T & x) {container.push_back(x);}
    void pop() {container.pop_back();}
    T & top() {return container.back();}

  private:
    List<T> container;
};
</pre>
		</div> 
	</div> 
</div> 	

						</td>
				<!-- End Psuedo -->

				<!-- Begin View -->
						<td colspan="5" align="center" valign="top">
						
							<div id="container"> <!-- container div for the stacks. Inside this div is Stack divs that each contain one bottom div for the bottom of the stack and one blank image with an arrow id. The blank image is programmed to be replaced with an arrow image in the java script code. Spacer divs are placed between each stack div which represents the black lines between the stacks.  -->
								<div id="Stack1">
								  <div id="text1"> </div> <div id="bottom1">
								</div><div> <img id ="arrow1" src="images/algorithm/stack/blank.png"  height="50px" width="50px" ></div></div>
								<div id="spacer1"></div>
								<div id="Stack2" onClick="fade('stack2', '1')"> <div id="text2"></div> <div id="bottom2"></div><div> <img id ="arrow2" src="images/algorithm/stack/blank.png"  height="50px" width="50px" ></div></div>
								<div id="spacer2"></div>
								<div id="Stack3" onClick="fade('stack3')"> <div id="text3"></div> <div id="bottom3"></div><div> <img id ="arrow3" src="images/algorithm/stack/blank.png"  height="50px" width="50px" ></div></div>
								<div id="spacer3"></div>
								<div id="Stack4" onClick="fade('stack4')"> <div id="text4"></div> <div id="bottom4"></div><div> <img id ="arrow4" src="images/algorithm/stack/blank.png"  height="50px" width="50px" ></div></div>
								<div id="spacer4"></div>
								<div id="Stack5" onClick="fade('stack5')"> <div id="text5"></div> <div id="bottom5"></div><div> <img id ="arrow5" src="images/algorithm/stack/blank.png"  height="50px" width="50px" ></div></div>
							</div>
							
						</td>
				<!-- End View -->
					</tr>
				
				<!-- Begin Settings -->
					<tr height="20%" id="algo-table-bottom">
						<td colspan="6" align="center"><!-- form to set value of the stack -->
							<input type="text" id="input1" size = "4" maxlength="4" />
							<button onClick="setTarget()">Set Value</button>
						</td>
					</tr>
				<!-- End Settings -->
				
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

