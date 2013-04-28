<!--
	Name:		Student One, Student Two, Team (One/Two)
	Project:		{AlgorithmA}; 2011
	File:		q.php
	Created:		20XX.XX.XX

	Modified By:	Student Name, Team (One/Two)
	Modified:		20XX.XX.XX
	
	Commented By:	Nathaniel Parrish, Documentation Team
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
		<h2>Queue</h2>		
		<br />
			<!-- Begin Template Table -->
				<table width="984px" id="algo-table" border="2" cellpadding="5">
					<tr height="5%" class="algo-table-top">
				<!-- Begin Contols -->				
						<td colspan="6" class="main-controls">
							<div style="float: left;" align="left" id="control-button-box">
								<button onclick="push()">PushBack</button>
								<button onclick="pop()">PopFront</button>
								<!--Doesn't completely reset at the moment
								<button onclick="reset()">Reset</button>-->
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
		<div id="tab1" class="tab_content" style="font-size:small;"> 
							<pre>
queue[MAX]
queueLast <- 0

<div id="pushhigh">Procedure push(item)
    queue[queueLast] <- item 
    queueLast <- queueLast + 1</div>
		
		
<div id="pophigh">Function pop()
    returnValue <- queue[0]
    for i <- 0 to queueLast - 1 do
        queue[i] <- queue[i + 1]
    queueLast <- queueLast - 1
    return returnValue</div>
</pre>
		</div> 
 
		<div id="tab2" class="tab_content" style="font-size:small;">
<pre>

class Queue
{
public:
  //We don't need a constructor or destructor because 
  //the Container has/should have one which in this case
  //is a list
  //Queue(): container() { }
  //~Queue() { ~container(); }
	
  bool empty() const {return container.empty();}
  unsigned int size() const {return container.size();}
  void push(const T & x) {container.push_back(x);}
  void pop() {container.pop_front();}
  T & front() {return container.front();}
  T & back() {return container.back();}

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
						<td colspan="5" valign="top">
							<div id="workarea" class="workarea">
								<div id="0" class="image" style="visibility: hidden; opacity : 0; position:absolute;">
									<img src="images/algorithm/queue/Box.gif" id = "0" >
									<div class="text">0</div>
								</div>
								<div id="1" class="image" style="visibility: hidden; opacity : 0; position:absolute;">
									<img src="images/algorithm/queue/Box.gif" id = "1" >
									<div class="text">1</div>
								</div>
								<div id="2" class="image" style="visibility: hidden; opacity : 0; position:absolute;">
									<img src="images/algorithm/queue/Box.gif" id = "2" >
									<div class="text">2</div>
								</div>
								<div id="3" class="image" style="visibility: hidden; opacity : 0; position:absolute;">
									<img src="images/algorithm/queue/Box.gif" id = "3" >
									<div class="text">3</div>
								</div>
								<div id="4" class="image" style="visibility: hidden; opacity : 0; position:absolute;">
									<img src="images/algorithm/queue/Box.gif" id = "4" >
									<div class="text">4</div>
								</div>
								<div id="5" class="image" style="visibility: hidden; opacity : 0; position:absolute;">
									<img src="images/algorithm/queue/Box.gif" id = "5" >
									<div class="text">5</div>
								</div>
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







