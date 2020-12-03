class HereMap {

    draw(mapObject) { }
    polygonToWKT(polygon) { }
    uploadGeofence(layerId, name, geometry) { }
    fenceRequest(layerIds, position) { }

    constructor(appId, appCode, mapElement) {
      this.appId = appId;
      this.appCode = appCode;
      this.platform = new H.service.Platform({
          "app_id": this.appId,
          "app_code": this.appCode
      });
      this.map = new H.Map(
          mapElement,
          this.platform.createDefaultLayers().normal.map,
          {
              zoom: 10,
              center: { lat: 37, lng: -121 }
          }
      );
      const mapEvent = new H.mapevents.MapEvents(this.map);
      const behavior = new H.mapevents.Behavior(mapEvent);
      this.geofencing = this.platform.getGeofencingService();
      this.currentPosition = new H.map.Marker({ lat: 37.21, lng: -121.21 });
      this.map.addObject(this.currentPosition);
    }
}
