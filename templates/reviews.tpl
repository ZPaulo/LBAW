{include file='common/betterHeader.tpl'} 

<div class="container content profile">	
    	<div class="row">
            <!--Left Sidebar-->
            <div class="col-md-3 md-margin-bottom-40">
                
				<a href="create_review.php"><button class="btn-u btn-block">Create Review</button></a>
                <!--End Datepicker-->
            </div>
            <!--End Left Sidebar-->

            <!-- Profile Content --> 
            {assign var="count" value=0 }           
            <div class="col-md-9">
                <div class="profile-body margin-bottom-20">
                    <!--Profile Blog-->
                    
                    {foreach from=$reviews item=r}
                    {if $count is even}
                    <div class="row margin-bottom-20">
                    {/if}
                        <div class="col-sm-6 {if $count is even} sm-margin-bottom-20 {/if}">
                            <div class="profile-blog">
                                <div class="name-location">
                                    <strong><span>{$r.cliente.nome}
                                    {for $foo=1 to $r.estrelas}
                                    <i class="fa fa-star"></i>
                                    {/for} </strong>
                                    <span><i class="fa fa-map-marker"></i>{$r.cliente.morada}</span>
                                    
                                </div>
                                <div class="clearfix margin-bottom-20"></div>   
                                <h5>Car</h5>
                                <p>{$r.comentariocarro}</p>
                                <h5>Service</h5>
                                <p>{$r.comentarioservico}</p>
                                <hr>
                                <ul class="list-inline share-list">
                                    <li>
                                {if $USERNAME === $r.cliente.username}<a href="../actions/reviews/delete_review.php?id={$r.reviewid}"><button class="btn-u btn-u-red btn-large">Delete Review</button></a>{/if}
                                {if $voted[$r.reviewid]===1}
                               	</a><a href="../actions/reviews/down_review.php?id={$r.reviewid}"><i class="fa fa-arrow-down"></i>
                                {elseif $voted[$r.reviewid]===-1}<a href="../actions/reviews/up_review.php?id={$r.reviewid}"><i class="fa fa-arrow-up"></i>
                                {else}
                                <a href="../actions/reviews/up_review.php?id={$r.reviewid}"><i class="fa fa-arrow-up"></i>
                                </a><a href="../actions/reviews/down_review.php?id={$r.reviewid}"><i class="fa fa-arrow-down"></i>
                                {/if}
                                </a>Rating: {$r.rating}  </li>
                                </ul>
                            </div>
                        </div>
                        
                    {assign var="count" value=$count+1 }        
					{if $count is even}
                    </div><!--/end row-->   
                    {/if}
                    {/foreach}    
                    
                    {if $count is odd}
                    </div><!--/end row-->
                    {/if}  
                    <!--End Profile Blog-->

                   

                    <!--End Profile Blog-->
                </div>
            </div>
            <!-- End Profile Content -->            
        </div><!--/end row-->
    </div>		


{include file='common/betterFooter.tpl'}