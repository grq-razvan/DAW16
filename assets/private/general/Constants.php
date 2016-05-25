<?php

/**
 *
 */
class Constants {

  const ASSET = "/assets";
  const GENERAL = "general";
  const NEWSPAPER = "newspaper";
  const AUTH = "authentication";
  const CONTACT = "contact";
  const COMMENTS = "comments";
  const USER = "user";
  const LIBRARY = "lib";
  const SEPARATOR = "/";
  const PUB_ASSET = "public";
  const PRIVATE_ASSET = "private";

  private static function getPublicAssetsPath() {
    return self::ASSET . self::SEPARATOR . self::PUB_ASSET;
  }

  private static function getPrivateAssetsPath() {
    return self::ASSET .self::SEPARATOR . self::PRIVATE_ASSET;
  }

  public static function getScriptsPath() {
    return self::getPublicAssetsPath() . self::SEPARATOR . "js";
  }

  public static function getStylesPath() {
    return self::getPublicAssetsPath() . self::SEPARATOR . "css";
  }

  public static function getTemplatesPath() {
    return self::getPublicAssetsPath() .self::SEPARATOR . "templates";
  }
}


 ?>
