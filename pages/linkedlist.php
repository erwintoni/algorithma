<!--
	Name:		Student One, Student Two, Team (One/Two)
	Project:		{AlgorithmA}; 2011
	File:		linkedlist.php
	Created:		20XX.XX.XX

	Modified By:	Student Name, Team (One/Two)
	Modified:		20XX.XX.XX
	
	Commented By:	Nathaniel Parrish, Documentation Team
	Commented:	2011.02.28
-->


	<table width="100%" border="0" cellspacing="0" cellpadding="0">
	  <tr>
		<td width="100%" bgcolor="white" class="banner_fill">

<!-- Start of php -->
	<table width="100%" border="0" align="center" cellpadding="15" cellspacing="0" class="fill_white_bkg">
	  <tr>
		<td align="center">
		<br />
		<h2>Linked List</h2>		
		<br />
		
		<!-- Begin Template Table -->
				<table width="984px" id="algo-table" border="2" cellpadding="5">
					<tr height="5%" class="algo-table-top">
				<!-- Begin Contols -->				
						<td colspan="6" class="main-controls">
							<div style="float: left;" align="left" id="control-button-box">
								<button onclick="push(currentLinkNumber)">Push</button>
								<button onclick="pushStep()">Forward</button>
								<button onclick="pop(currentLinkNumber)">Pop</button>
								<button onclick="popStep()">Back</button>
								<button onclick="javascript:location.reload(true)">Reset</button>
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
{The following pseudo code shows 
functions for a singly linked list,
The Node object contains a value, 
and a reference to the next node 
in the list}

Procedure push_front(value)
  currentNode <- headNode	
<div id = "pseudo1">  newNode.value <- value </div>
<div id = "pseudo2">  newNode.nextNode <- currentNode</div>
  headNode <- newNode

Procedure pop_front()
  newHead <-headNode.nextNode
<div id = "pseudo3">  delete headNode</div>
<div id = "pseudo4">  headNode <- newHead</div>
</pre>	
		</div> 
							 
	<div id="tab2" class="tab_content" style="font-size:small;"> 
<pre>
//class Link is a friend class to List
class Link
{
private:
   Link(const T & x): value(x), next_link(0) {}

   T value;
   Link<T> * next_link;
   friend class List<T>;
};

//The following functions are within the List class

void List<T>::push_front(const T & x)
{
  Link<T> * newlink = new Link<T>(x);

  if(first_link != NULL) 
  {//at least one element exists in the list
    first_link->prev_link = newlink;
    newlink->next_link = first_link;
    newlink->prev_link = NULL;
  }
  else//first element in the list
    last_link = newlink; 

  first_link = newlink;
  my_size++;
}//push_front

void List<T>::pop_front()
{
  if(first_link != NULL)
  { //more than 1 element in list
    if(first_link->next_link != NULL)
    {
      first_link = first_link->next_link;
      delete first_link->prev_link;
      first_link->prev_link = NULL;
    }
    else //1 element in list
    {
      Link<T> * temp = first_link;
      first_link = NULL;
      last_link = NULL;
      delete temp;
    }

    my_size--;
  }
}//pop_front
</pre>
		</div> 
	</div> 
</div> 				
							
						</td>
				<!-- End Psuedo -->

				<!-- Begin View -->
						<td colspan="5" valign="top">
							<div id="workarea" class="workarea">
								<div id="rowHold"></div>

								<img id="nullPointer1" style="visibility: hidden;" src="images/algorithm/linkedlist/NullLinkImg.gif" width="100" height = "100" />
								<img id="nextPointer1" style="visibility: hidden;" src="images/algorithm/linkedlist/NextLinkImg.gif" width="100" height = "100" />
								
								
								<img id="nullPointer2" style="visibility: hidden;" src="images/algorithm/linkedlist/NullLinkImg.gif" width="100" height = "100" />
								<img id="nextPointer2" style="visibility: hidden;" src="images/algorithm/linkedlist/NextLinkImg.gif" width="100" height = "100" />
								
								
								<img id="nullPointer3" style="visibility: hidden;" src="images/algorithm/linkedlist/NullLinkImg.gif" width="100" height = "100" />
								<img id="nextPointer3" style="visibility: hidden;" src="images/algorithm/linkedlist/NextLinkImg.gif" width="100" height = "100" />
								
								
								<img id="nullPointer4" style="visibility: hidden;" src="images/algorithm/linkedlist/NullLinkImg.gif" width="100" height = "100" />
								<img id="nextPointer4" style="visibility: hidden;" src="images/algorithm/linkedlist/NextLinkImg.gif" width="100" height = "100" />
								
								
								<img id="nullPointer5" style="visibility: hidden;" src="images/algorithm/linkedlist/NullLinkImg.gif" width="100" height = "100" />
								<img id="nextPointer5" style="visibility: hidden;" src="images/algorithm/linkedlist/NextLinkImg.gif" width="100" height = "100" />
							</div>
						</td>
				<!-- End View -->
					</tr>
				
				<!-- Begin Settings -->
					<!-- <tr height="20%" id="algo-table-bottom"></tr> -->
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


