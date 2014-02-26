SHP_PATH ?= shapefiles
# smaller numbers (1e-8 == .00000001) are more precise
SIMPLIFY ?= 1e-8

all: provinsi.topojson dapil.topojson test

provinsi.topojson:
	topojson --bbox --id-property id_provinsi --properties nm_provinsi \
		--simplify $(SIMPLIFY) \
		$(SHP_PATH)/dapil_provinsi/shp/DAPIL_PROVINSI.shp \
		> $@

dapil.topojson:
	topojson --bbox --id-property id_dapil --properties nm_provinsi,nm_dapil \
		--simplify $(SIMPLIFY) \
		$(SHP_PATH)/dapil_nasional_DPD/shp/DAPIL_NASIONAL_DPD.shp \
		$(SHP_PATH)/dapil_nasional_DPR/shp/DAPIL_NASIONAL_DPR.shp \
		> $@

provinsi_dapil.topojson:

test:
	du -h *.topojson

clean:
	rm -f provinsi.topojson
	rm -f dapil.topojson
