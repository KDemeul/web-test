#!/bin/bash

	CURRENT=`pwd` #${dir%*/}
	BASENAME=`basename $CURRENT`
	echo $BASENAME
	x=0
	for i in `ls *.jpg`
	do
		x=`expr $x + 1`
		echo $BASENAME$x.jpg
		mv $i $BASENAME$x.jpg
	done
	x=0
	for i in `ls *.png`
	do
		x=`expr $x + 1`
		echo $BASENAME$x.png
		mv $i $BASENAME$x.png
	done
	echo "rename done!"
