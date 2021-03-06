// @dart=2.9
import 'package:fitness/screens/home.dart';
import 'package:flutter/material.dart';
import 'package:fitness/constants/app_constants.dart';
void main() {
  runApp(const MyApp());
}

class MyApp extends StatelessWidget {
  const MyApp({Key key}) : super(key: key);

  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      title: 'Fitness App',
      debugShowCheckedModeBanner : false,
      theme: ThemeData(
        primarySwatch: colorYellow,
        visualDensity: VisualDensity.adaptivePlatformDensity,
      ),
      home: const HomeScreen(),
    );
  }
}