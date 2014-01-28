all: build clean

build: deliverables.tex description.tex detail.tex index.tex preamble.tex ref.bib 
	latexmk -dvi- -pdf index.tex

clean: 
	latexmk -c
	rm -f *.bbl *.dvi *.bak *.gz
