all: build clean

build: index.tex
	latexmk -dvi- -pdf index.tex

clean: 
	latexmk -c
	rm -f *.bbl *.dvi *.bak *.gz
