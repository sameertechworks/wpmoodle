/*
YUI 3.15.0 (build 834026e)
Copyright 2014 Yahoo! Inc. All rights reserved.
Licensed under the BSD License.
http://yuilibrary.com/license/
*/

YUI.add("widget-autohide",function(e,t){function m(t){e.after(this._bindUIAutohide,this,f),e.after(this._syncUIAutohide,this,l),this.get(c)&&(this._bindUIAutohide(),this._syncUIAutohide())}var n="widgetAutohide",r="autohide",i="clickoutside",s="focusoutside",o="document",u="key",a="esc",f="bindUI",l="syncUI",c="rendered",h="boundingBox",p="visible",d="Change",v=e.ClassNameManager.getClassName;m.ATTRS={hideOn:{validator:e.Lang.isArray,valueFn:function(){return[{node:e.one(o),eventName:u,keyCode:a}]}}},m.prototype={_uiHandlesAutohide:null,destructor:function(){this._detachUIHandlesAutohide()},_bindUIAutohide:function(){this.after(p+d,this._afterHostVisibleChangeAutohide),this.after("hideOnChange",this._afterHideOnChange)},_syncUIAutohide:function(){this._uiSetHostVisibleAutohide(this.get(p))},_uiSetHostVisibleAutohide:function(t){t?e.later(1,this,"_attachUIHandlesAutohide"):this._detachUIHandlesAutohide()},_attachUIHandlesAutohide:function(){if(this._uiHandlesAutohide)return;var t=this.get(h),n=e.bind(this.hide,this),r=[],i=this,s=this.get("hideOn"),o=0,u={node:undefined,ev:undefined,keyCode:undefined};for(;o<s.length;o++)u.node=s[o].node,u.ev=s[o].eventName,u.keyCode=s[o].keyCode,!u.node&&!u.keyCode&&u.ev?r.push(t.on(u.ev,n)):u.node&&!u.keyCode&&u.ev?r.push(u.node.on(u.ev,n)):u.node&&u.keyCode&&u.ev&&r.push(u.node.on(u.ev,n,u.keyCode));this._uiHandlesAutohide=r},_detachUIHandlesAutohide:function(){e.each(this._uiHandlesAutohide,function(e){e.detach()}),this._uiHandlesAutohide=null},_afterHostVisibleChangeAutohide:function(e){this._uiSetHostVisibleAutohide(e.newVal)},_afterHideOnChange:function(e){this._detachUIHandlesAutohide(),this.get(p)&&this._attachUIHandlesAutohide()}},e.WidgetAutohide=m},"3.15.0",{requires:["base-build","event-key","event-outside","widget"]});
