﻿document.writeln("<form class=\"form-horizontal templatemo-contact-form-1\" role=\"form\" action=\"Home/Index/creat\" method=\"post\">");
document.writeln("				<div class=\"form-group\">");
document.writeln("					<div class=\"col-md-12\">");
document.writeln("						<h1 class=\"margin-bottom-15\">快速预约</h1>");
document.writeln("						<p>请如实填写以下信息.</p>");
document.writeln("					</div>");
document.writeln("				</div>				");
document.writeln("		        <div class=\"form-group\">");
document.writeln("		          <div class=\"col-md-12\">		          	");
document.writeln("		            <label for=\"username\" class=\"control-label\">姓名 *</label>");
document.writeln("		            <div class=\"templatemo-input-icon-container\">");
document.writeln("		            	<i class=\"fa fa-user\"></i>");
document.writeln("		            	<input type=\"text\" class=\"form-control\" id=\"username\" placeholder=\"\" name=\"username\">");
document.writeln("		            </div>		            		            		            ");
document.writeln("		          </div>              ");
document.writeln("		        </div>");
document.writeln("		        <div class=\"form-group\">");
document.writeln("		          <div class=\"col-md-6\">");
document.writeln("		            <label for=\"sex\" class=\"control-label\">性别 *</label>");
document.writeln("		            <div class=\"templatemo-input-icon-container\">");
document.writeln("		            	<i class=\"fa fa-envelope-o\"></i>");
document.writeln("		            	<label class=\"radio-inline input-lg\">");
document.writeln("                       　<input type=\"radio\" name=\"sex\"  value=\"1\" checked> 男");
document.writeln("                       </label>");
document.writeln("                       <label class=\"radio-inline input-lg\">");
document.writeln("                       　<input type=\"radio\" name=\"sex\"  value=\"0\"> 女");
document.writeln("                       </label>					   ");
document.writeln("		            </div>					");
document.writeln("		          </div>");
document.writeln("				  <div class=\"col-md-6\">	");
document.writeln("					   <label for=\"age\" class=\"control-label\">年龄 *</label>");
document.writeln("					   <div class=\"templatemo-input-icon-container\">");
document.writeln("		            	<i class=\"fa fa-user\"></i>");
document.writeln("		            	<input type=\"age\" class=\"form-control\" id=\"age\" placeholder=\"\" name=\"age\">");
document.writeln("		            </div>	");
document.writeln("					   </div>");
document.writeln("		        </div>");
document.writeln("				<input type=\"hidden\" name=\"hospital\" value=\"这里是地址信息\">								");
document.writeln("		        <div class=\"form-group\">");
document.writeln("		          <div class=\"col-md-12\">");
document.writeln("		            <label for=\"date\" class=\"control-label\">预约时间 *</label>");
document.writeln("		            <div class=\"templatemo-input-icon-container\">");
document.writeln("		            	<i class=\"fa fa-globe\"></i>");
document.writeln("		            	<input type=\"text\" class=\"form-control\" id=\"odertime\" placeholder=\"\" name=\"odertime\">");
document.writeln("		            </div>");
document.writeln("		          </div>");
document.writeln("		        </div>");
document.writeln("		        <div class=\"form-group\">");
document.writeln("		          <div class=\"col-md-12\">");
document.writeln("		            <label for=\"phone\" class=\"control-label\">手机号码 *</label>");
document.writeln("		            <div class=\"templatemo-input-icon-container\">");
document.writeln("		            	<i class=\"fa fa-info-circle\"></i>");
document.writeln("		            	<input type=\"text\" class=\"form-control\" id=\"phone\" placeholder=\"\" name=\"phone\">");
document.writeln("		            </div>");
document.writeln("		          </div>");
document.writeln("		        </div>");
document.writeln("		        <div class=\"form-group\">");
document.writeln("		          <div class=\"col-md-12\">");
document.writeln("		            <label for=\"message\" class=\"control-label\">病情简述 *</label>");
document.writeln("		            <div class=\"templatemo-input-icon-container\">");
document.writeln("		            	<i class=\"fa fa-pencil-square-o\"></i>");
document.writeln("		            	<textarea rows=\"8\" cols=\"50\" class=\"form-control\" id=\"message\" placeholder=\"\" name=\"message\"></textarea>");
document.writeln("		            </div>");
document.writeln("		          </div>");
document.writeln("		        </div>");
document.writeln("		       <div class=\"form-group\">");
document.writeln("		          <div class=\"col-md-6\">");
document.writeln("		            <label for=\"phone\" class=\"control-label\">验证码 *</label>");
document.writeln("		            <div class=\"templatemo-input-icon-container\">");
document.writeln("		            	<i class=\"fa fa-info-circle\"></i>");
document.writeln("		            	<input type=\"text\" class=\"form-control\" id=\"code\"  name=\"code\" placeholder=\"点击右侧图片可更换验证码\">");
document.writeln("		            </div>");
document.writeln("		          </div>");
document.writeln("				  <div class=\"col-md-6\">");
document.writeln("				<img src=\"Home/Public/code\" class=\"img-responsive\" onclick=\'this.src=this.src;\' style=\'height:45px;width:140px;margin-top:30px;\'>");
document.writeln("				</div>");
document.writeln("		        </div>");
document.writeln("				");
document.writeln("	   	        <div class=\"form-group\">");
document.writeln("		          <div class=\"col-md-12\">");
document.writeln("		            <input type=\"submit\" value=\"申请预约\" class=\"btn btn-success pull-right\">");
document.writeln("		          </div>");
document.writeln("		        </div>		    	");
document.writeln("		      </form>");