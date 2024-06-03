function edit_contact(contactid,callback){var div=jQuery("<div title=\"Edit Contact Details\" id=\"contact-editor\"><center><br/><img src='/assets/loaders/default.gif' alt='Loading'/></center></div>");div.dialog({modal:!0,height:160,width:265,open:function(){jQuery(this).load("/ejax-edit-contact/?i="+contactid+"&callback="+callback)},close:function(){jQuery(this).dialog("destroy").remove(),void 0!==callback&&eval(callback)}})}function remove_order_line(lid,cb){jQuery.get("/ejax-remove-orderline/",{lid:lid},function(data){var OrderLine=jQuery.parseJSON(data);eval(cb+"(OrderLine)")})}function initialise_widgets(){jQuery(".efButton").not(".ui-button").button(),jQuery(".efTable").addClass("ui-widget-content"),"function"==typeof qtip&&jQuery(".efToolTip").not(".qtip").qtip()}function currency_format(e){var t=parseFloat(e);isNaN(t)&&(t=0);var i=t<0?"-":"",t=Math.abs(t);return t=parseInt(100*(t+.005)),t/=100,s=new String(t),s.indexOf(".")<0&&(s+=".00"),s.indexOf(".")==s.length-2&&(s+="0"),s=i+s,s}function terminate_officer(e,t){if(void 0===e)return!1;if(void 0===t)return!1;var i="";i+='<div id="efTerminateOfficerAlert">',i+="<p>Would you like to terminate this officer at Companies House.</p>",i+='<a href="/efiling-officer-terminate/?o='+e.toString()+"&i="+t.toString()+'&postToCh=true" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only ef-yes"><span class="ui-button-text">Yes, terminate at Companies House.</span></a>',i+='<a href="/efiling-officer-terminate/?o='+e.toString()+"&i="+t.toString()+'" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only ef-no"><span class="ui-button-text">No, terminate company at eFiling.</span></a>',i+="</div>",jQuery("body").append(i),jQuery("#efTerminateOfficerAlert").dialog({title:"Terminate an officers.",height:140,width:500,modal:!0,close:function(){jQuery(this).remove()}})}function get_address(e,t,i){void 0===i&&(i=""),void 0===t&&(t="Choose Address"),jQuery("body").append('<div id="efGenericAddressGetter"><img style="display:block;margin:0 auto;padding-top:160px" src="/assets/loaders/default.gif" alt="Loading..."></div>'),jQuery("#efGenericAddressGetter").dialog({title:t,height:570,width:600,modal:!0,open:function(){jQuery.get("/ejax-get-address/","cb="+e+"&opts="+i,function(e){jQuery("#efGenericAddressGetter").html(e)})},close:function(){jQuery(this).remove()}})}function edit_address(e,t,i){void 0===t&&(t=""),void 0===i&&(i=""),jQuery('<div id="efEditInlineAddressDialog" title="Confirmation Required">\t<p>Are you sure you wish to edit this address?</p>\t<p>Do not use this option if you wish to use a different address.</p> <div class="ui-dialog-buttonpane ui-widget-content ui-helper-clearfix">  <div class="ui-dialog-buttonset">   <button type="button" text="confirm" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" role="button" aria-disabled="false"><span class="ui-button-text">Confirm</span></button>   <button type="button" text="cancel" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" role="button" aria-disabled="false"><span class="ui-button-text">Cancel</span></button>  </div> </div></div>').dialog({close:function(){jQuery("#efEditInlineAddressDialog").dialog("destroy").remove(),$("body").off("click","#efEditInlineAddressDialog [text='cancel']"),$("body").off("click","#efEditInlineAddressDialog [text='confirm']")},height:200,width:400,modal:!0}),$("body").on("click","#efEditInlineAddressDialog [text='cancel']",function(){$("#efEditInlineAddressDialog").dialog("close")}),$("body").on("click","#efEditInlineAddressDialog [text='confirm']",function(){$("#efEditInlineAddressDialog").dialog("close"),jQuery('<div title="Edit Address" id="efEditThisAddress">\t<div style="text-align:center;padding-top:100px">  <img src="/assets/loaders/default.gif" alt="Loading" /> </div></div>').dialog({modal:!0,height:460,width:420,open:function(){jQuery.get("/ejax-edit-address/","callback="+t+"&i="+e+"&opts="+i,function(e){jQuery("#efEditThisAddress").html(e)})},close:function(){jQuery(this).dialog("destroy").remove(),jQuery("#efEditInlineAddressDialog").dialog("destroy").remove()}})})}function upper_case_this(e){jQuery(e).val(jQuery(e).val().toUpperCase())}function upper_case_this_deprec(e){s=getCaretPositionStart(e),e.value=e.value.toUpperCase(),setCaretPosition(e,s)}function getCaretPositionStart(e){if(e.createTextRange){var t=document.selection.createRange().duplicate();return t.moveEnd("character",e.value.length),""==t.text?e.value.length:e.value.lastIndexOf(t.text)}return e.selectionStart}function setCaretPosition(e,t){var i,o=e;null!=o&&(o.createTextRange?((i=o.createTextRange()).move("character",t),i.select()):o.selectionStart?(o.focus(),o.setSelectionRange(t,t)):o.focus())}function IsEmail(e){return 1==/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/.test(e)}function IsInt(e){}function GetUrlVars(){var o={};window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi,function(e,t,i){o[t]=i});return o}function show_company_sync_form(e){jQuery('<div class="efCompanyManagerSyncDialog" id="efCompanyManagerSyncDialog" title="Company Sync"><div class="efDialogLoading"><img src="/assets/loaders/default.gif" alt="Loading"/></div></div>').dialog({title:"Company Sync",modal:!0,resizable:!1,open:function(){var t=jQuery(this);t.parent(".ui-dialog").css("width","800"),jQuery.get("/ejax-company-manager-sync/",{inc:e},function(e){t.html(e),t.dialog("option","position",t.dialog("option","position"))})},close:function(){jQuery("#efCompanyManagerSyncDialog").dialog("destroy").remove()}})}function show_company_form(e,i,o,a){var t=new Array;t.NAME_CHANGE="Change Company Name",t.REGOFFICE_CHANGE="Change Registered Office",t.CHANGE_ACC_DATE="Change Accounting Reference Date",t.ANNUAL_RETURN="Annual Return",void 0===o&&(o="0"),jQuery('<div class="efCompanyForm" id="efCompanyForm_'+e+'" title="'+t[e]+'"><div class="efDialogLoading"><img src="/assets/loaders/default.gif" alt="Loading"/></div></div>').dialog({modal:!0,resizable:!1,dialogClass:"efCompanyForm_"+e,open:function(){var t=jQuery(this);t.parent(".ui-dialog").css("width","auto"),jQuery.get("/ejax-company-form-"+e+"/",{i:i,o:o,jason:a},function(e){t.html(e),t.dialog("option","position",t.dialog("option","position"))})},close:function(){jQuery("#efCompanyForm_"+e).dialog("destroy").remove()}})}function cm_update_officer(e,i,o,t,a){void 0===o&&(o="0"),void 0===t&&(t="Company Appointment"),void 0===a&&(a=0),jQuery('<div class="efCompanyManagerAppointmentDialog" id="efCompanyManagerAppointmentDialog" title="Company Appointment"><div class="efDialogLoading"><img src="/assets/loaders/default.gif" alt="Loading"/></div></div>').dialog({title:t,modal:!0,resizable:!1,open:function(){var t=jQuery(this);t.parent(".ui-dialog").css("width","auto"),jQuery.get("/ejax-company-manager-officer-dialog/",{i:e,o:i,omnom:o,update_ch:a},function(e){t.html(e),t.dialog("option","position",t.dialog("option","position"))})},close:function(){jQuery("#efCompanyManagerAppointmentDialog").dialog("destroy").remove()}})}function show_modal_loader(e,t){var i=jQuery('<div style="width:'+t.css("width")+';" class="efDialogLoading efModalDialogSubmit" id="efModalDialogSubmitLoader"><p>'+e+'</p><p><img src="/assets/loaders/default.gif" alt="Loading"/></p></div>');t.css("visibility","hidden"),t.before(i)}function hide_modal_loader(e){jQuery("#efModalDialogSubmitLoader").remove(),e.css("visibility","visible")}function edit_company_detail(e,i,o,a){jQuery('<div class="efCompanyDetailEditDialog" id="efCompanyDetailEditDialog_'+i+'" title="Edit Detail"><div class=\'efDialogLoading\'><p>Please wait...</p><p><img src="/assets/loaders/default.gif" alt="Loading"/></p></div></div>').dialog({modal:!0,resizable:!1,height:150,open:function(){var t=jQuery(this);t.parent(".ui-dialog").css("width","auto"),jQuery.get("/ejax-edit-company-detail/",{i:o,label:e,param:i,callback:a},function(e){t.html(e),t.dialog("option","position",t.dialog("option","position"))})},close:function(){jQuery("#efCompanyDetailEditDialog_"+i).dialog("destroy").remove()}})}function complete_initial_officer_setup(e,i,o){jQuery('<div class="efCompanyIntialOfficerSetup" id="efCompanyIntialOfficerSetup" title="Initial Officer Setup"><div class=\'efDialogLoading\'><p>Please wait...</p><p><img src="/assets/loaders/default.gif" alt="Loading"/></p></div></div>').dialog({modal:!0,resizable:!1,open:function(){var t=jQuery(this);t.parent(".ui-dialog").css("width","auto"),jQuery.get("/ejax-import-officers/",{i:e,cb:i,o:o},function(e){t.html(e),t.dialog("option","position",t.dialog("option","position"))})},close:function(){jQuery("#efCompanyIntialOfficerSetup").dialog("destroy").remove()}})}function _GET_(e){e=e.replace(/[[]/,"[").replace(/[]]/,"]");var t=new RegExp("[?&]"+e+"=([^&#]*)").exec(window.location.href);return null==t?"":t[1]}function str_pad(e,t){for(var i=""+e;i.length<t;)i="0"+i;return i}function loading_dialog(e){var t=jQuery.extend({title:"Loading",modal:!0,resizable:!1,draggable:!1,autoOpen:!0},e),i="this_is_the_loading_dialog";jQuery(i).length&&jQuery(i).dialog("destroy").remove();var o=create_dialog_div({title:t.title,id:i});return jQuery("#"+o).html('<div style="padding:20px;text-align:center;">Loading...<br /><br /><img src="/assets/loaders/default.gif" alt="Loading..." /></div>').dialog({draggable:t.draggable,modal:t.modal,resizable:t.resizable,autoOpen:t.autoOpen}).closest(".ui-dialog").find(".ui-dialog-titlebar").remove(),o}function loading_dialog_close(){jQuery("#this_is_the_loading_dialog").dialog("destroy").remove()}function create_dialog_div(e){var t=(t="dialog"+Math.random()).replace(".",""),i=jQuery.extend({title:"Efiling Dialog",id:t},e),o=jQuery("<div></div>").attr("id",i.id).attr("title",i.title);return jQuery(o).html('<center><br /><br /><br /><br />Loading...<br /><br /><br /><br /><img src="/assets/loaders/default.gif" alt="Loading..." /></center>').hide().prependTo("body"),i.id}function efStaticAutoComplete(n,l){var r;if(!n)return!1;function i(e){e&&(function(e){for(var t=0;t<e.length;t++)e[t].classList.remove("ef-autocomplete-active")}(e),r>=e.length&&(r=0),r<0&&(r=e.length-1),e[r].classList.add("ef-autocomplete-active"))}function d(e){for(var t=document.getElementsByClassName("ef-autocomplete-items"),i=0;i<t.length;i++)e!=t[i]&&e!=n&&t[i].parentNode.removeChild(t[i])}n.addEventListener("input",function(e){var t,i,o,a=this.value;if(d(),!a)return!1;for(r=-1,(t=document.createElement("DIV")).setAttribute("id",this.id+"autocomplete-list"),t.setAttribute("class","ef-autocomplete-items"),this.parentNode.appendChild(t),o=0;o<l.length;o++)l[o].substr(0,a.length).toUpperCase()==a.toUpperCase()&&((i=document.createElement("DIV")).innerHTML="<strong>"+l[o].substr(0,a.length)+"</strong>",i.innerHTML+=l[o].substr(a.length),i.innerHTML+="<input type='hidden' value='"+l[o]+"'>",i.addEventListener("click",function(e){n.value=this.getElementsByTagName("input")[0].value,n.setAttribute("value",n.value),d()}),t.appendChild(i))}),n.addEventListener("keydown",function(e){var t=(t=document.getElementById(this.id+"autocomplete-list"))&&t.getElementsByTagName("div");40==e.keyCode?(r++,i(t)):38==e.keyCode?(r--,i(t)):13==e.keyCode&&(e.preventDefault(),-1<r&&t&&t[r].click())}),document.addEventListener("click",function(e){d(e.target)})}function efAjaxAutoComplete(c,i){var o,a;if(!c)return!1;function n(){c.classList.remove("search-box-loader")}function l(e){var t,i=[],o=[],a=null,n=c.value;for(e.forEach(function(e){i.push(e.label),o.push(e)}),(t=document.createElement("DIV")).setAttribute("id",c.id+"-autocomplete-list"),t.setAttribute("class","ef-autocomplete-items"),c.parentNode.appendChild(t),a=0;a<i.length;a++){var l=o[a].label?o[a].label:"",r=o[a].icon?o[a].icon:"",d=o[a].desc?o[a].desc:"",s=o[a].url?o[a].url:"",u=null;(u=document.createElement("div")).setAttribute("data-url",s),u.innerHTML+="<i class='ef-icon "+r+"'></i>",l.substr(0,n.length).toUpperCase()==n.toUpperCase()?u.innerHTML+="<strong>"+l.substr(0,n.length)+"</strong>":u.innerHTML+=l.substr(0,n.length),u.innerHTML+=l.substr(n.length),u.innerHTML+="<p>"+d+"</p>",u.addEventListener("click",function(e){var t=this.getAttribute("data-url");0<t.length&&(window.location=t,f())}),t.appendChild(u)}}function r(e){e&&(function(e){for(var t=0;t<e.length;t++)e[t].classList.remove("ef-autocomplete-active")}(e),o>=e.length&&(o=0),o<0&&(o=e.length-1),e[o].classList.add("ef-autocomplete-active"))}function f(e){for(var t=document.getElementsByClassName("ef-autocomplete-items"),i=0;i<t.length;i++)e!=t[i]&&e!=c&&t[i].parentNode.removeChild(t[i])}c.addEventListener("input",function(e){var t=this.value;if(clearTimeout(a),f(),!t||t.length<3)return!1;a=setTimeout(function(){o=-1,c.classList.add("search-box-loader"),this.ajax=fetch(i+t).then(function(e){return e.json()}).then(l).then(n)},1e3)}),c.addEventListener("keydown",function(e){var t=(t=document.getElementById(this.id+"autocomplete-list"))&&t.getElementsByTagName("div");40==e.keyCode?(o++,r(t)):38==e.keyCode?(o--,r(t)):13==e.keyCode&&(e.preventDefault(),-1<o&&t&&t[o].click())}),document.addEventListener("click",function(e){f(e.target)})}jQuery(function(){initialise_widgets()});