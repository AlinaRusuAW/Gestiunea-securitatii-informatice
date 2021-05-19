package com.company;

public class Encryption {
    public static void main(String[] args){
        int key = 5;
        String text = ">>>>>>";
        System.out.println(text);
        char[] chars = text.toCharArray();
        for(char c: chars){
            c -= key;
            System.out.print(c);
        }
    }
}
