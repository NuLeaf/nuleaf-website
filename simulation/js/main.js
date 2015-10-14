	$(function () {

		/*Creates an Atom Object*/
		var Atom = function (x, y, z, size, atomColor) {

			this.velocity = new THREE.Vector3(0, 0, 0);
			this.acceleration = new THREE.Vector3(0, 0, 0);
			this.rotationVelocity = new THREE.Vector3(0, 0, 0);
			this.rotationAcceleration = new THREE.Vector3(0, 0, 0);

			this.model = new THREE.Mesh(
				new THREE.SphereGeometry(size, 32, 32),
				new THREE.MeshPhongMaterial({
					color: atomColor
				})
			);
			
			this.model.position.set(x, y, z);

			this.model.castShadow = true;
			scene.add(this.model);
		};
		Atom.prototype.update = function () {

			this.rotationVelocity.add(this.rotationAcceleration);
			this.rotationVelocity.clamp(new THREE.Vector3(-0.1, -0.1, -0.1), new THREE.Vector3(0.1, 0.1, 0.1));

			var v = new THREE.Vector3();
			v.addVectors(this.model.rotation.toVector3(), this.rotationVelocity);
			this.model.rotation.setFromVector3(v);


			this.velocity.add(this.acceleration);
			this.velocity.clamp(new THREE.Vector3(-3, -3, -3), new THREE.Vector3(3, 3, 3));
			this.model.position.add(this.velocity);
			this.setBounds(55);

		};
		
		Atom.prototype.setBounds = function (bounds) {
			if (this.model.position.x > bounds || this.model.position.x < -bounds) {
				if (this.model.position.x > bounds) {
					this.model.position.x = bounds;
				}
				if (this.model.position.x < -bounds) {
					this.model.position.x = -bounds;
				}
				this.velocity.x = -this.velocity.x;
				this.acceleration.x = -this.acceleration.x;
			}
			if (this.model.position.y > bounds || this.model.position.y < -bounds) {
				if (this.model.position.y > bounds) {
					this.model.position.y = bounds;
				}
				if (this.model.position.y < -bounds) {
					this.model.position.y = -bounds;
				}
				this.velocity.y = -this.velocity.y;
				this.acceleration.y = -this.acceleration.y;
			}
			if (this.model.position.z > bounds || this.model.position.z < -bounds) {
				if (this.model.position.z > bounds) {
					this.model.position.z = bounds;
				}
				if (this.model.position.z < -bounds) {
					this.model.position.z = -bounds;
				}
				this.velocity.z = -this.velocity.z;
				this.acceleration.z = -this.acceleration.z;
			}
		};

		var scene = new THREE.Scene(); //Create a new Scene
		var camera = new THREE.PerspectiveCamera(45, window.innerWidth / window.innerHeight, 0.1, 1000); //Set up a Camera
		var renderer = new THREE.WebGLRenderer(); // Set up a renderer
		camera.position.set(80, 80, 80); //Sets position of the spotlight,
		camera.lookAt(scene.position); //Connects the scene and the camera.
		renderer.setClearColor(0xdddddd); //Sets the color of the background.
		renderer.setSize(window.innerWidth, window.innerHeight);
		renderer.shadowMapEnabled = true; //Allows for use of shadows.
		renderer.render(scene, camera); //Tells the renderer to draw whatever the camera is seeing.
		$("#webGL-container").append(renderer.domElement); //Adds the animation to the DOM.
		noise.seed(Math.random());							//Allows for Perlin Noise
		
		var setScene = function () {
			var axis = new THREE.AxisHelper(10); //Creates an Axis of length 10.
			var grid = new THREE.GridHelper(60, 5); //Creates a grid of size 60 and intervals of 5.
			grid.setColors(0xFF0000, 0x000000);
			scene.add(axis); //Adds the Axis object to the scene.
			scene.add(grid); //Adds the Grid object to the scene.


			/*Creates a plane with Mesh(geometry, material)
			Every 3D object needs a Mesh. 
			The mesh consists of:
			Geometry 	- The shape that the mesh will take [Sphere, Rectangle, Cylinder, ect].
			Material	- The type of surface the mesh will have.
			
			The Mesh also has a Position and Rotation Vector3 object.			
			*/
			var planeY = new THREE.Mesh(new THREE.PlaneGeometry(120, 120, 30,30),new THREE.MeshLambertMaterial({color: 0xffffff})	);
			planeY.rotation.x = -0.5 * Math.PI;
			planeY.position.set(0, -60, 0);
			planeY.receiveShadow = true;

			var planeZ = new THREE.Mesh(new THREE.PlaneGeometry(120, 120, 30,30),new THREE.MeshLambertMaterial({color: 0xffffff})	);
			planeZ.position.set(0, 0, -60);
			planeZ.receiveShadow = true;
			
			var planeX = new THREE.Mesh(new THREE.PlaneGeometry(120, 120, 30,30),new THREE.MeshLambertMaterial({color: 0xffffff})	);
			planeX.rotation.y = 0.5 * Math.PI;
			planeX.position.set(-60,0,0);
			planeX.receiveShadow = true;
			
			scene.add(planeX);
			scene.add(planeY);
			scene.add(planeZ);
			
			/*Creates spotlight with Spotlight(color)*/
			var spotLight = new THREE.SpotLight(0xffffff);
			spotLight.castShadow = true;
			spotLight.position.set(30, 60, 70);
			//spotLight.shadowCameraVisible = true;
			scene.add(spotLight);
			
		};
		setScene();
		
		var o = new Atom(0, 0, 0, 3, 0xff0000);
		var h1 = new Atom(5, 0, 0, 2, 0xffffff);
		var h2 = new Atom(0, 0, 0, 2, 0xffffff);

		//Create an object which stores all of the GUI values through which they can be accessed.
		var GUI = new function () {
			this.CAMERA_X = camera.position.x;
			this.CAMERA_Y = camera.position.y;
			this.CAMERA_Z = camera.position.z;


		};
		//Defines what should appear in the GUI.
		var initGUI = function () {
			var datGUI = new dat.GUI();
			datGUI.add(GUI, 'CAMERA_X', -200, 200);
			datGUI.add(GUI, 'CAMERA_Y', -200, 200);
			datGUI.add(GUI, 'CAMERA_Z', -200, 200);

		};
		
		initGUI();
		
		
		var p = 0.001;
		draw();	
		/*Runs the animation. There is a requestAnimationFrame that runs this method repeatedly.*/
		function draw() {
			
			camera.position.set(GUI.CAMERA_X, GUI.CAMERA_Y, GUI.CAMERA_Z);
			o.update();

			//Updates Molecule Acceleration for sake of the visualization.			
			o.acceleration.set(noise.simplex2(p+1.3,p+50.001)/50,noise.simplex2(p+3.102,p+32.12)/50,noise.simplex2(p+13.1,p+72.23)/50);		
			
			//Rotates the molecule in the direction that it is moving.
			o.rotationAcceleration.set(o.velocity.x, o.velocity.y,	o.velocity.z);
			
			//Angles camera in the direction of the molecule.
			camera.lookAt(o.model.position);
			
			/*This is where we calculate the position of Atoms h1 & h2 based on the rotation of Atom o.
			We set their positions relative to the origin to correspond to their location to Atom o with rotation 0.*/
			h1.model.position.set(0, 5, 5);
			h2.model.position.set(0, 5, -5);
			//Creates the Quaternion and sets it to the rotation of the molecule.
			var rot = new THREE.Quaternion();
			rot.setFromEuler(o.model.rotation);
			//Applies the same rotation to each Atom h*.
			h1.model.position.applyQuaternion(rot);
			h2.model.position.applyQuaternion(rot);
			//Translates the atoms to their absolute position around Atom O.
			h1.model.position.add(o.model.position);
			h2.model.position.add(o.model.position);

			requestAnimationFrame(draw); 		//Requests to repeat this method.
			renderer.render(scene, camera);		//Connects the scene and the camera to the renderer so it can draw it.
			
			p+= 0.01;
		}

	});