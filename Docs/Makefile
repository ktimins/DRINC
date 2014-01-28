all: design presentation proposal requirements system

#############
# Design
#############

design: 
	$(MAKE) -C Design all

design-build: 
	$(MAKE) -C Design build

design-clean: 
	$(MAKE) -C Design clean

#############
# Presenatation
#############

presentation: 
	$(MAKE) -C Presentation all

presentation-build: 
	$(MAKE) -C Presentation build

presentation-clean: 
	$(MAKE) -C Presentation clean


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
# System and Software Architecture
#############

system:
	$(MAKE) -C System\ and\ Software\ Architecture all

system-build:
	$(MAKE) -C System\ and\ Software\ Architecture build

system-clean:
	$(MAKE) -C System\ and\ Software\ Architecture clean


#############
# Clean
#############
clean: design-clean presentation-clean proposal-clean requirements-clean system-clean
