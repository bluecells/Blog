(function (cjs, an) {

var p; // shortcut to reference prototypes
var lib={};var ss={};var img={};
lib.ssMetadata = [
		{name:"methodologie_atlas_", frames: [[916,580,400,400],[916,0,896,288],[916,290,896,288],[0,0,914,1310]]}
];


// symbols:



(lib._400pxcercleviolence = function() {
	this.initialize(ss["methodologie_atlas_"]);
	this.gotoAndStop(0);
}).prototype = p = new cjs.Sprite();



(lib.CachedTexturedBitmap_10 = function() {
	this.initialize(ss["methodologie_atlas_"]);
	this.gotoAndStop(1);
}).prototype = p = new cjs.Sprite();



(lib.CachedTexturedBitmap_11 = function() {
	this.initialize(ss["methodologie_atlas_"]);
	this.gotoAndStop(2);
}).prototype = p = new cjs.Sprite();



(lib.CachedTexturedBitmap_7 = function() {
	this.initialize(ss["methodologie_atlas_"]);
	this.gotoAndStop(3);
}).prototype = p = new cjs.Sprite();



(lib.Séquence_1_SoftControl = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// SoftControl
	this.text = new cjs.Text("I do ask you something.\nYou oppose a passive resistance.\nI apply light physical control.", "36px 'Agency FB'", "#FFFFFF");
	this.text.lineHeight = 42;
	this.text.lineWidth = 396;
	this.text.parent = this;
	this.text.setTransform(2,78.05);

	this.text_1 = new cjs.Text("Soft Control", "bold 59px 'Agency FB'", "#FFFFFF");
	this.text_1.lineHeight = 71;
	this.text_1.lineWidth = 325;
	this.text_1.parent = this;
	this.text_1.setTransform(2,2);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[]}).to({state:[{t:this.text_1},{t:this.text}]},144).wait(72));

}).prototype = p = new cjs.MovieClip();


(lib.Séquence_1_PressureRelease = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// PressureRelease
	this.text = new cjs.Text("My control has an effect.\nYou go back to a lower resistance.\nI release the pressure and keep \na tight physical control.", "36px 'Agency FB'", "#FFFFFF");
	this.text.lineHeight = 42;
	this.text.lineWidth = 396;
	this.text.parent = this;
	this.text.setTransform(2,79.7);

	this.text_1 = new cjs.Text("Pressure Release ", "bold 59px 'Agency FB'", "#FFFFFF");
	this.text_1.lineHeight = 71;
	this.text_1.lineWidth = 398;
	this.text_1.parent = this;
	this.text_1.setTransform(2,2);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[]}).to({state:[{t:this.text_1},{t:this.text}]},288).wait(72));

}).prototype = p = new cjs.MovieClip();


(lib.Séquence_1_Presence = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Presence
	this.text = new cjs.Text("I see you. \nYou see me.\nYou cooperate tacitly.\n", "36px 'Agency FB'", "#FFFFFF");
	this.text.lineHeight = 42;
	this.text.lineWidth = 396;
	this.text.parent = this;
	this.text.setTransform(2,78.8);

	this.text_1 = new cjs.Text("PRESENCE", "bold 59px 'Agency FB'", "#FFFFFF");
	this.text_1.lineHeight = 71;
	this.text_1.lineWidth = 208;
	this.text_1.parent = this;
	this.text_1.setTransform(2,2);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.text_1},{t:this.text}]}).wait(72));

}).prototype = p = new cjs.MovieClip();


(lib.Séquence_1_HardControl = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// HardControl
	this.text = new cjs.Text("My orders have no effect.\nYou oppose an active resistance.\nI apply hard physical control.", "36px 'Agency FB'", "#FFFFFF");
	this.text.lineHeight = 42;
	this.text.lineWidth = 396;
	this.text.parent = this;
	this.text.setTransform(2,102.7);

	this.text_1 = new cjs.Text("Hard Control", "bold 59px 'Agency FB'", "#FFFFFF");
	this.text_1.lineHeight = 71;
	this.text_1.lineWidth = 325;
	this.text_1.parent = this;
	this.text_1.setTransform(2,2);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[]}).to({state:[{t:this.text_1},{t:this.text}]},216).wait(72));

}).prototype = p = new cjs.MovieClip();


(lib.Séquence_1_Fond = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Fond
	this.instance = new lib.CachedTexturedBitmap_7();
	this.instance.parent = this;
	this.instance.setTransform(-33.45,-38.45,0.5,0.5);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(433));

}).prototype = p = new cjs.MovieClip();


(lib.Séquence_1_Communication = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Communication
	this.text = new cjs.Text("I ask you something.\nYou accept.\nYou cooperate actively.\n", "36px 'Agency FB'", "#FFFFFF");
	this.text.lineHeight = 42;
	this.text.lineWidth = 396;
	this.text.parent = this;
	this.text.setTransform(2,78.8);

	this.text_1 = new cjs.Text("Communication", "bold 59px 'Agency FB'", "#FFFFFF");
	this.text_1.lineHeight = 71;
	this.text_1.lineWidth = 399;
	this.text_1.parent = this;
	this.text_1.setTransform(2,2);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[]}).to({state:[{t:this.text_1},{t:this.text}]},72).wait(72));

}).prototype = p = new cjs.MovieClip();


(lib.Séquence_1_Cercle = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Cercle
	this.instance = new lib._400pxcercleviolence();
	this.instance.parent = this;
	this.instance.setTransform(-9,225);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(432).to({x:-12,y:231},0).wait(1));

}).prototype = p = new cjs.MovieClip();


(lib.Interpoler2 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-223.9,-71.9,448,144);


(lib.Interpoler1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-223.9,-71.9,448,144);


(lib.Séquence_1_Masque = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Masque
	this.instance = new lib.CachedTexturedBitmap_11();
	this.instance.parent = this;
	this.instance.setTransform(-28.95,123.05,0.5,0.5);

	this.instance_1 = new lib.Interpoler1("synched",0);
	this.instance_1.parent = this;
	this.instance_1.setTransform(195,196);
	this.instance_1._off = true;

	this.instance_2 = new lib.Interpoler2("synched",0);
	this.instance_2.parent = this;
	this.instance_2.setTransform(195,241.35);
	this.instance_2._off = true;

	this.instance_3 = new lib.CachedTexturedBitmap_10();
	this.instance_3.parent = this;
	this.instance_3.setTransform(-28.95,123.05,0.5,0.5);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.instance}]}).to({state:[{t:this.instance_1}]},25).to({state:[{t:this.instance_2}]},23).to({state:[{t:this.instance_2}]},23).to({state:[{t:this.instance_3}]},1).to({state:[{t:this.instance_1}]},25).to({state:[{t:this.instance_2}]},23).to({state:[{t:this.instance_2}]},23).to({state:[]},1).to({state:[{t:this.instance_1}]},25).to({state:[{t:this.instance_2}]},23).to({state:[{t:this.instance_2}]},23).to({state:[]},1).to({state:[{t:this.instance_1}]},25).to({state:[{t:this.instance_2}]},23).to({state:[{t:this.instance_2}]},23).to({state:[]},1).to({state:[{t:this.instance_1}]},25).to({state:[{t:this.instance_2}]},23).to({state:[{t:this.instance_2}]},23).wait(1));
	this.timeline.addTween(cjs.Tween.get(this.instance_1).wait(25).to({_off:false},0).to({_off:true,y:241.35},23).wait(49).to({_off:false,y:194},0).to({_off:true,y:237.25},23).wait(49).to({_off:false,x:199,y:194},0).to({_off:true,x:195,y:237.25},23).wait(49).to({_off:false,y:219},0).to({_off:true,y:265.25},23).wait(49).to({_off:false,y:196},0).to({_off:true,y:237.25},23).wait(24));
	this.timeline.addTween(cjs.Tween.get(this.instance_2).wait(25).to({_off:false},23).to({x:199,y:281.25},23).to({_off:true},1).wait(25).to({_off:false,x:195,y:237.25},23).to({x:199,y:282.25},23).to({_off:true},1).wait(25).to({_off:false,x:195,y:237.25},23).to({x:199,y:279.25},23).to({_off:true},1).wait(25).to({_off:false,x:195,y:265.25},23).to({x:199,y:320.25},23).to({_off:true},1).wait(25).to({_off:false,x:195,y:237.25},23).to({x:199,y:323.25},23).wait(1));

}).prototype = p = new cjs.MovieClip();


// stage content:
(lib.methodologie = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	this.___GetDepth___ = function(obj) {
		var depth = obj.depth;
		var cameraObj = this.___camera___instance;
		if(cameraObj && cameraObj.depth && obj.isAttachedToCamera)
		{
			depth += depth + cameraObj.depth;
		}
		return depth;
		}
	this.___needSorting___ = function() {
		for (var i = 0; i < this.getNumChildren() - 1; i++)
		{
			var prevDepth = this.___GetDepth___(this.getChildAt(i));
			var nextDepth = this.___GetDepth___(this.getChildAt(i + 1));
			if (prevDepth < nextDepth)
				return true;
		}
		return false;
	}
	this.___sortFunction___ = function(obj1, obj2) {
		return (this.exportRoot.___GetDepth___(obj2) - this.exportRoot.___GetDepth___(obj1));
	}
	this.on('tick', function (event){
		var curTimeline = event.currentTarget;
		if (curTimeline.___needSorting___()){
			this.sortChildren(curTimeline.___sortFunction___);
		}
	});

	// timeline functions:
	this.frame_432 = function() {
		this.___loopingOver___ = true;
	}

	// actions tween:
	this.timeline.addTween(cjs.Tween.get(this).wait(432).call(this.frame_432).wait(1));

	// Cercle_obj_
	this.Cercle = new lib.Séquence_1_Cercle();
	this.Cercle.name = "Cercle";
	this.Cercle.parent = this;
	this.Cercle.setTransform(191,425,1,1,0,0,0,191,425);
	this.Cercle.depth = 0;
	this.Cercle.isAttachedToCamera = 0
	this.Cercle.isAttachedToMask = 0
	this.Cercle.layerDepth = 0
	this.Cercle.layerIndex = 0
	this.Cercle.maskLayerName = 0

	this.timeline.addTween(cjs.Tween.get(this.Cercle).wait(433));

	// Masque_obj_
	this.Masque = new lib.Séquence_1_Masque();
	this.Masque.name = "Masque";
	this.Masque.parent = this;
	this.Masque.setTransform(195.1,195.1,1,1,0,0,0,195.1,195.1);
	this.Masque.depth = 0;
	this.Masque.isAttachedToCamera = 0
	this.Masque.isAttachedToMask = 0
	this.Masque.layerDepth = 0
	this.Masque.layerIndex = 1
	this.Masque.maskLayerName = 0

	this.timeline.addTween(cjs.Tween.get(this.Masque).wait(359).to({_off:true},1).wait(73));

	// Presence_obj_
	this.Presence = new lib.Séquence_1_Presence();
	this.Presence.name = "Presence";
	this.Presence.parent = this;
	this.Presence.setTransform(200,156.7,1,1,0,0,0,200,156.7);
	this.Presence.depth = 0;
	this.Presence.isAttachedToCamera = 0
	this.Presence.isAttachedToMask = 0
	this.Presence.layerDepth = 0
	this.Presence.layerIndex = 2
	this.Presence.maskLayerName = 0

	this.timeline.addTween(cjs.Tween.get(this.Presence).to({_off:true},72).wait(361));

	// Communication_obj_
	this.Communication = new lib.Séquence_1_Communication();
	this.Communication.name = "Communication";
	this.Communication.parent = this;
	this.Communication.depth = 0;
	this.Communication.isAttachedToCamera = 0
	this.Communication.isAttachedToMask = 0
	this.Communication.layerDepth = 0
	this.Communication.layerIndex = 3
	this.Communication.maskLayerName = 0

	this.timeline.addTween(cjs.Tween.get(this.Communication).wait(72).to({_off:true},72).wait(289));

	// SoftControl_obj_
	this.SoftControl = new lib.Séquence_1_SoftControl();
	this.SoftControl.name = "SoftControl";
	this.SoftControl.parent = this;
	this.SoftControl.depth = 0;
	this.SoftControl.isAttachedToCamera = 0
	this.SoftControl.isAttachedToMask = 0
	this.SoftControl.layerDepth = 0
	this.SoftControl.layerIndex = 4
	this.SoftControl.maskLayerName = 0

	this.timeline.addTween(cjs.Tween.get(this.SoftControl).wait(144).to({_off:true},72).wait(217));

	// HardControl_obj_
	this.HardControl = new lib.Séquence_1_HardControl();
	this.HardControl.name = "HardControl";
	this.HardControl.parent = this;
	this.HardControl.depth = 0;
	this.HardControl.isAttachedToCamera = 0
	this.HardControl.isAttachedToMask = 0
	this.HardControl.layerDepth = 0
	this.HardControl.layerIndex = 5
	this.HardControl.maskLayerName = 0

	this.timeline.addTween(cjs.Tween.get(this.HardControl).wait(216).to({_off:true},72).wait(145));

	// PressureRelease_obj_
	this.PressureRelease = new lib.Séquence_1_PressureRelease();
	this.PressureRelease.name = "PressureRelease";
	this.PressureRelease.parent = this;
	this.PressureRelease.depth = 0;
	this.PressureRelease.isAttachedToCamera = 0
	this.PressureRelease.isAttachedToMask = 0
	this.PressureRelease.layerDepth = 0
	this.PressureRelease.layerIndex = 6
	this.PressureRelease.maskLayerName = 0

	this.timeline.addTween(cjs.Tween.get(this.PressureRelease).wait(288).to({_off:true},72).wait(73));

	// Fond_obj_
	this.Fond = new lib.Séquence_1_Fond();
	this.Fond.name = "Fond";
	this.Fond.parent = this;
	this.Fond.setTransform(195.1,289.1,1,1,0,0,0,195.1,289.1);
	this.Fond.depth = 0;
	this.Fond.isAttachedToCamera = 0
	this.Fond.isAttachedToMask = 0
	this.Fond.layerDepth = 0
	this.Fond.layerIndex = 7
	this.Fond.maskLayerName = 0

	this.timeline.addTween(cjs.Tween.get(this.Fond).wait(433));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(166.6,261.6,257,369.4);
// library properties:
lib.properties = {
	id: 'D201D0BD37411645A7865CF06BD784C5',
	width: 400,
	height: 600,
	fps: 24,
	color: "#FFFFFF",
	opacity: 1.00,
	manifest: [
		{src:"images/methodologie_atlas_.png", id:"methodologie_atlas_"}
	],
	preloads: []
};



// bootstrap callback support:

(lib.Stage = function(canvas) {
	createjs.Stage.call(this, canvas);
}).prototype = p = new createjs.Stage();

p.setAutoPlay = function(autoPlay) {
	this.tickEnabled = autoPlay;
}
p.play = function() { this.tickEnabled = true; this.getChildAt(0).gotoAndPlay(this.getTimelinePosition()) }
p.stop = function(ms) { if(ms) this.seek(ms); this.tickEnabled = false; }
p.seek = function(ms) { this.tickEnabled = true; this.getChildAt(0).gotoAndStop(lib.properties.fps * ms / 1000); }
p.getDuration = function() { return this.getChildAt(0).totalFrames / lib.properties.fps * 1000; }

p.getTimelinePosition = function() { return this.getChildAt(0).currentFrame / lib.properties.fps * 1000; }

an.bootcompsLoaded = an.bootcompsLoaded || [];
if(!an.bootstrapListeners) {
	an.bootstrapListeners=[];
}

an.bootstrapCallback=function(fnCallback) {
	an.bootstrapListeners.push(fnCallback);
	if(an.bootcompsLoaded.length > 0) {
		for(var i=0; i<an.bootcompsLoaded.length; ++i) {
			fnCallback(an.bootcompsLoaded[i]);
		}
	}
};

an.compositions = an.compositions || {};
an.compositions['D201D0BD37411645A7865CF06BD784C5'] = {
	getStage: function() { return exportRoot.getStage(); },
	getLibrary: function() { return lib; },
	getSpriteSheet: function() { return ss; },
	getImages: function() { return img; }
};

an.compositionLoaded = function(id) {
	an.bootcompsLoaded.push(id);
	for(var j=0; j<an.bootstrapListeners.length; j++) {
		an.bootstrapListeners[j](id);
	}
}

an.getComposition = function(id) {
	return an.compositions[id];
}


// Layer depth API : 

AdobeAn.Layer = new function() {
	this.getLayerZDepth = function(timeline, layerName)
	{
		if(layerName === "Camera")
		layerName = "___camera___instance";
		var script = "if(timeline." + layerName + ") timeline." + layerName + ".depth; else 0;";
		return eval(script);
	}
	this.setLayerZDepth = function(timeline, layerName, zDepth)
	{
		const MAX_zDepth = 10000;
		const MIN_zDepth = -5000;
		if(zDepth > MAX_zDepth)
			zDepth = MAX_zDepth;
		else if(zDepth < MIN_zDepth)
			zDepth = MIN_zDepth;
		if(layerName === "Camera")
		layerName = "___camera___instance";
		var script = "if(timeline." + layerName + ") timeline." + layerName + ".depth = " + zDepth + ";";
		eval(script);
	}
	this.removeLayer = function(timeline, layerName)
	{
		if(layerName === "Camera")
		layerName = "___camera___instance";
		var script = "if(timeline." + layerName + ") timeline.removeChild(timeline." + layerName + ");";
		eval(script);
	}
	this.addNewLayer = function(timeline, layerName, zDepth)
	{
		if(layerName === "Camera")
		layerName = "___camera___instance";
		zDepth = typeof zDepth !== 'undefined' ? zDepth : 0;
		var layer = new createjs.MovieClip();
		layer.name = layerName;
		layer.depth = zDepth;
		layer.layerIndex = 0;
		timeline.addChild(layer);
	}
}


})(createjs = createjs||{}, AdobeAn = AdobeAn||{});
var createjs, AdobeAn;