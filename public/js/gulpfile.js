var gulp = require("gulp");

var targetCSSDir = "public/css";
var targetJSDir = "public/css";
var sassDir="/app/assets/sass";

gulp.task("css",function(){
    
    return gulp.src(sassDir + "/main.sass")
        .pipe(sass({style:"compressed"}))
        .pipe(gulp.dest(targetCSSSDir));

});


