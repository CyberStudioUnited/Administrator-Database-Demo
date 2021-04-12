const editor = grapesjs.init({
  container: "#editor",
  fromElement: true,
  width: "auto",
  storageManager: false,
  plugins: ["gjs-preset-webpage"],
  pluginsOpts: {
    "gjs-preset-webpage": {},
  },
});

var blockManager = editor.BlockManager;

// 'my-first-block' is the ID of the block
blockManager.add('legend', {
  label:`
	<i class="fa fa-font"></i>
	<div class="gjs-block-label">Legend</div>
  `,
  category:{
	label:"Basic"  
  },
  content: '<legend style="font-size:50px;">This is legend text</legend>'
});

blockManager.add('center', {
  label:`
	<i class="fa fa-align-center"></i>
	<div class="gjs-block-label">Center</div>
  `,
  category:{
	label:"Basic"  
  },
  content: '<center><p>Centered Text</p><p>Centered Text 2</p><p>Centered Text 3</p></center>'
});