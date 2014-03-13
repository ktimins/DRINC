all: build clean

build: hardwareDesign.tex index.tex intro.tex nonFuncReqs.tex preambleLocal.tex revision.tex serverConfig.tex softwareDesign.tex title.tex useCase.tex
	latexmk -dvi- -pdf index.tex
	cp index.pdf ../PDFs/Design.pdf

clean: 
	latexmk -c
	rm -f *.bbl *.dvi *.bak *.gz
