all: proposal

proposal: 
	$(MAKE) -C Proposal all

proposal-build: 
	$(MAKE) -C Proposal build

proposal-clean: 
	$(MAKE) -C Proposal clean

clean: proposal-clean
