
void setup()
{
    size(400, 400);
}

// position of the ball
var x = 20;
var y = 200;

// how far the ball moves every time
var xspeed = 3;
var yspeed = 3;

var r = 66;//main value of 0, max value of 255
var g = 66;//main value of 0, max value of 255
var b = 66;//main value of 0, max value of 255

var rval = 1;

var whatToDraw = 0;

void draw(){
    //this colors in the background, change a value to change the color
    background(66, 66, 66);

    //this draws the ball
    if (rval == 1){
      ellipse(x, y, 50, 50);
    }else if(rval == 2){
      rect(x, y, 50, 50);
      rectMode(CENTER);
    }

    //This is how the color of the ball is determined.  Don't worry about the format, just know that changing the value of a variable will change it's color.
    fill(r,g,b);

    //@TODO 1: make the ball bounce back and forth
    if( x >= 375){
      //--xspeed; <--- what I originally had, was causing issues
      xspeed = -3;
      rval = 1;
      console.log(x + " --> " + xspeed);
    }else if ( x<=25){
      //++xspeed;
      xspeed = 3;
      rval = 2;
    }

    //@TODO 2: does the ball bounce on it's edge or the center? Make it bounce on it's edge. Keep in mind that it's diameter is 50 and we draw it from the center...

    //@TODO 3: make the ball bounce in the y coordinate using the same structure you did for x.  Does it bounce in a predictable or unpredictable manner? How do you fix that?

    if(y >= 375 || y<= 25){
      yspeed = -(yspeed);
    }

    //@TODO 4: can you draw a different shape when it bounces off a wall?
    //         use rect(x, y, 50, 50)


    // move the ball

    x = x + xspeed ;
    y = y + yspeed;

    //@TODO 5: can you create code to make the ball change color?
    //      use a similar series of if statements and change the value of the r and rval variables

    //Top Wall
    if (x >= 25 && y <= 25){
      r= 255;
      g= 0;
      b= 0;
    //Right Wall
    }else if (x >= 375 && y <=375){
      r= 232;
      g= 12;
      b= 122;
    //Bottom Wall
    }else if ( x<= 375 && y >=375){
      r= 255;
      g= 83;
      b= 13;
    //Left Wall
    }else if (x<=25 && y <=375 ){
       r=255;
       g= 13;
       b= 255;
    }


};
