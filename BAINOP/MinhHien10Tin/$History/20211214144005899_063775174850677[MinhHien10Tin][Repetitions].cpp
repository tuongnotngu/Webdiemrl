#include <bits/stdc++.h>
#include <string>
using namespace std;
using std::string;
#define lli long long int
lli length[100000000]={};
int main(){

    if (fopen ("Repetitions.inp","r")){
        freopen ("Repetitions.inp","r",stdin);
        freopen ("Repetitions.out","w",stdout);
    }

    string s;
    lli maxx=0;
    cin>>s;
    for (int i=1;i<=s.size(); i++){
    length[s[i]]++;
    maxx = max(length[s[i]], maxx);}
       cout<<maxx;
    }



