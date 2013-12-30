all: proposal requirements

#############
# Proposal
#############
proposal: 
	$(MAKE) -C Proposal all

proposal-build: 
	$(MAKE) -C Proposal build

proposal-clean: 
	$(MAKE) -C Proposal clean

#############
# Requirements
#############

requirements: 
	$(MAKE) -C Requirements all

requirements-build: 
	$(MAKE) -C Requirements build

requirements-clean: 
	$(MAKE) -C Requirements clean

#############
# Clean
#############
clean: proposal-clean requirements-clean
